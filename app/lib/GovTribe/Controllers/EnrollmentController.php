<?php namespace GovTribe\Controllers;

use App;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\Environment as View;
use Illuminate\Validation\Factory as Validator;
use Illuminate\Http\Request as Request;
use Illuminate\Mail\Mailer as Mailer;
use GovTribe\Storage\UserRepository as User;
use GovTribe\Storage\KeyRepository as Key;

class EnrollmentController extends BaseController {

	protected $view;
	protected $validator;
	protected $request;
	protected $user;
	protected $key;
	protected $mailer;

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(View $view, Validator $validator, Request $request, User $user, Key $key, Mailer $mailer)
	{
		$this->beforeFilter('force.ssl');
		$this->beforeFilter('csrf', array('on' => 'post'));

		$this->view = $view;
		$this->validator = $validator;
		$this->request = $request;
		$this->userRepository = $user;
		$this->keyRepository = $key;
		$this->mailer = $mailer;
	}

	/**
	 * Display the enrollment form.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return $this->view->make('register');
	}

	/**
	 * Enroll a user
	 *
	 * @return Response
	 */
	public function postEnroll()
	{
		$formData = [
			'firstName' => $this->request->get('firstName'),
			'lastName' => $this->request->get('lastName'),
			'company' => $this->request->get('company'),
			'email' => $this->request->get('email'),
		];

		$rules = [
			'firstName' => 'required',
			'lastName' => 'required',
			'email' => 'required|email',
		];

		$validator = $this->validator->make($formData, $rules);

		if ($validator->passes())
		{
			$user = $this->userRepository->findByEmail($formData['email']);
			$key = $this->keyRepository->findByEmail($formData['email'], ['_id']);

			if ($user && $key)
			{
				$data = [
					'user' => $user,
					'key' => $key,
				];
			}
			elseif ($user)
			{
				$this->userRepository->addPlatform($user, 'api');

				$data = [
					'user' => $user,
					'key' => $this->makeKey($formData),
				];
			}
			else
			{
				$data = [
					'user' => $this->makeUser($formData),
					'key' => $this->makeKey($formData),
				];
			}

			$data['name'] = $data['user']->first_name . ' ' . $data['user']->lastName;

			$this->mailer->send('emails.key.deliver', $data, function($message) use ($data)
			{
				$message->to($data['user']['username'], $data['name'])->subject('Your GovTribe API Key');
			});

			return \Response::json();
		}
		else
		{
			throw new \Exception($validator->messages()->first());
		}
	}

	/**
	 * Create a new API key.
	 *
	 * @param  array $formData
	 * @return object
	 */
	public function makeKey(array $formData)
	{
		return $this->keyRepository->create($formData + ['registrationIp' => $this->request->getClientIp()]);
	}

	/**
	 * Create a new user.
	 *
	 * @param  array $formData
	 * @return object
	 */
	public function makeuser(array $formData)
	{
		$formData['username'] = $formData['email'];
		$formData['first_name'] = $formData['firstName'];
		$formData['last_name'] = $formData['lastName'];

		if (empty($formData['company'])) unset($formData['company']);

		return $this->userRepository->create($formData);
	}
}
