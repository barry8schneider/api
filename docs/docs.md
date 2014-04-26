FORMAT: 1A
HOST: https://api.govtribe.com

# GovTribe API
[Our](http://govtribe.com) goal is to make accessing federal procurement data **simple**, **fast** and **easy** to understand The actors in the process - a vendor that wins a project, the contracting officer that released it, the agency that funds it, etc. - are mapped to API endpoints. We expose the relationships between those actors, and provide some fun data about what they're doing. 

# Group Agency
Agencies represent federal agencies.

## Agency List [/agency]
Get a list of agencies. The list will be sorted by

+ Even
+ More
+ Markdown

+ Model

    + Headers

            Content-Type: application/json
            X-Request-ID: f72fc914
            X-Response-Time: 4ms

    + Body

            [
                {
                    "id": 1,
                    "title": "Grocery list",
                    "body": "Buy milk"
                },
                {
                    "id": 2,
                    "title": "TODO",
                    "body": "Fix garage door"
                }
            ]

### Get Agency [GET]
Get a list of notes.

+ Response 200
    
    [Agency List][]

## Agency [/agency/{_id}]
Note description

+ Parameters

    + id (required, string, `68a5sdf67`) ... The note ID

+ Model

    + Headers

            Content-Type: application/json
            X-Request-ID: f72fc914
            X-Response-Time: 4ms

    + Body

            {
                "id": 1,
                "title": "Grocery list",
                "body": "Buy milk"
            }

### Get Agency [GET]
Get a single agency.

+ Response 200

    [Agency][]

+ Response 404

    + Headers

            Content-Type: application/json
            X-Request-ID: f72fc914
            X-Response-Time: 4ms

    + Body

            {
                "error": "Note not found"
            }

# Group Users
Group description

## User List [/users{?name,joinedBefore,joinedAfter,sort,limit}]
A list of users

+ Parameters

    + name (optional, string, `alice`) ... Search for a user by name
    + joinedBefore (optional, string, `2011-01-01`) ... Search by join date
    + joinedAfter (optional, string, `2011-01-01`) ... Search by join date
    + sort = `name` (optional, string, `joined`) ... Which field to sort by

        + Values
            + `name`
            + `joined`
            + `-joined`

    + limit = `10` (optional, integer, `25`) ... The maximum number of users to return, up to `50`

+ Model

    + Headers

            Content-Type: application/json

    + Body

            [
                {
                    "name": "alice",
                    "image": "http://foo.com/alice.jpg",
                    "joined": "2013-11-01"
                },
                {
                    "name": "bob",
                    "image": "http://foo.com/bob.jpg",
                    "joined": "2013-11-02"
                }
            ]

    + Schema

            {
                "type": "array",
                "maxItems": 50,
                "items": {
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": "string"
                        },
                        "image": {
                            "type": "string"
                        },
                        "joined": {
                            "type": "string",
                            "pattern": "\d{4}-\d{2}-\d{2}"
                        }
                    }
                }
            }

### Get users [GET]
Get a list of users. Example:

```no-highlight
https://api.mywebsite.com/users?sort=joined&limit=5
```

+ Response 200

    [User List][]

# Group Tags
Get or set tags on notes

## GET /tags
Get a list of bars

+ Response 200

## Get one tag [/tags/{id}]
Get a single tag

### GET

+ Response 200
