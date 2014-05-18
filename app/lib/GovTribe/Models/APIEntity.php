<?php namespace GovTribe\Models;

use GovTribe\Models\Collection;
use GovTribe\Transformers\AgencyTransformer;
use GovTribe\Transformers\PersonTransformer;

class APIEntity extends \Jenssegers\Mongodb\Model {

	/**
	 * Indicates whether attributes are snake cased on arrays.
	 *
	 * @var bool
	 */
	public static $snakeAttributes = false;

	/**
	 * Get the model's transformer
	 *
	 * @param  array  $models
	 * @return GovTribe\Transformers\Transformer
	 */
	public function getTransformer()
	{
		return \App::make(class_basename($this) . 'Transformer');
	}

	/**
	 * Create a new Eloquent Collection instance.
	 *
	 * @param  array  $models
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function newCollection(array $models = array())
	{
		return new Collection($models);
	}

	public function getSourceLinksAttribute()
	{
		$output = [];

		if (isset($this->attributes['sourceLink']) && !empty($this->attributes['sourceLink'])) $output[] = $this->attributes['sourceLink'];

		return $output;
	}

	public function getNAICSWonAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['topNAICSs']))
		{
			$data = array_keys($this->attributes['market']['characteristics']['topNAICSs']);
			array_walk($data, function(&$item){$item = (string) $item;});
			return $data;
		}
		else return [];
	}

	public function getSetAsideTypesWonAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['setAsideType']))
		{
			$data = array_keys($this->attributes['market']['characteristics']['setAsideType']);
			array_walk($data, function(&$item){$item = (string) $item;});

			return $data;
		}
		else return [];
	}

	public function getClassCodesWonAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['topClassCodes']))
		{
			$data = array_keys($this->attributes['market']['characteristics']['topClassCodes']);
			array_walk($data, function(&$item){$item = (string) $item;});

			return $data;
		}
		else return [];
	}

	public function getNumbersOfAwardsAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['awardsPerYear']))
		{
			return $this->attributes['market']['characteristics']['awardsPerYear'];
		}
		else return [];
	}

	public function getAwardDollarFlowAttribute()
	{
		if (isset($this->attributes['market']['dollarFlow']))
		{
			$formatter = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
			$data = $this->attributes['market']['dollarFlow'];
			array_walk($data, function(&$item) use ($formatter)
			{
				$item = $formatter->parseCurrency($item, $curr);
			});

			foreach ($data as $tb => $val)
			{
				$data[] = ['timeBucket' => $tb, 'value' => $val];
				unset($data[$tb]);
			}

			return $data;
		}
		else return [];
	}

	public function getTotalProtestsAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['protestsPerYear']))
		{
			return $this->attributes['market']['characteristics']['protestsPerYear'];
		}
		else return [];
	}

	public function getProtestsWithdrawnAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['protestsWithdrawn']))
		{
			return $this->attributes['market']['characteristics']['protestsWithdrawn'];
		}
		else return [];
	}

	public function getProtestsDeniedAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['protestsDenied']))
		{
			return $this->attributes['market']['characteristics']['protestsDenied'];
		}
		else return [];
	}

	public function getProtestsSustainedAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['protestsSustained']))
		{
			return $this->attributes['market']['characteristics']['protestsSustained'];
		}
		else return [];
	}

	public function getProtestsDismissedAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['protestsDismissed']))
		{
			return $this->attributes['market']['characteristics']['protestsDismissed'];
		}
		else return [];
	}

	public function getAverageTimesToAwardAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['averageDaysToAwardPerYear']))
		{
			return $this->attributes['market']['characteristics']['averageDaysToAwardPerYear'];
		}
		else return [];
	}

	public function getAverageAwardValuesAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['averageAwardValuePerYear']))
		{
			return $this->attributes['market']['characteristics']['averageAwardValuePerYear'];
		}
		else return [];
	}

	public function getActivePeopleAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['activePeoplePerYear']))
		{
			return $this->attributes['market']['characteristics']['activePeoplePerYear'];
		}
		else return [];
	}

	public function getActiveOfficesAttribute()
	{
		if (isset($this->attributes['market']['characteristics']['activeOfficesPerYear']))
		{
			return $this->attributes['market']['characteristics']['activeOfficesPerYear'];
		}
		else return [];
	}

}