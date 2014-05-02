FORMAT: 1A
HOST: https://api.govtribe.com

# GovTribe API
[Our](http://govtribe.com) goal is to make accessing federal procurement data **simple**, **fast** and **easy** to understand.

 The actors in the process - agencies, offices, projects, vendors, protests and more - are turned into entities. We expose the relationships between entities, and provide some fun data about what they're doing. 

# Group Agency
Agency entities represent federal agencies.

## Agency Properties
- _id: The agency's system id
- acronym: The agency's acronym, or 'None' if none is available
- name: The agency's name
- timestamp: When the API last saw activity for this entity
- type: The agency's system type

## Agency List [/agency{?search}]

Use search to find agencies, or get a list of recently active agencies.

+ Parameters

    + search (optional, string, `Department of Veter`) ... Search for an agency by name

+ Model

    + Headers

            X-GT-API-Version: 3.0

    + Body

            [
                {
                    "_id": "51548151db40a5165c0000cd",
                    "name": "Department of Veterans Affairs",
                    "type": "agency"
                },
                {
                    "_id": "51548151db40a5165c0000d1",
                    "name": "Department of the Navy",
                    "type": "agency"
                }
            ]
            
## Get Agency List [GET]

### Get a list of recently active agencies
```no-highlight
http://api.govtribe.com/agency
```
### Search for an agency by name
```no-highlight
http://api.govtribe.com/agency?search=Department of Veter
```
+ Response 200
    
    [Agency List][]

## Agency [/agency/{_id}]
Get details for an agency.

+ Parameters

    + _id (required, string, `51548151db40a5165c0000cd`) ... The agency _id

+ Model

    + Headers

            X-GT-API-Version: 3.0

    + Body

            {
                "_id": "51548151db40a5165c0000cd",
                "acronym": "VA",
                "name": "Department of Veterans Affairs",
                "timestamp": 1398628560,
                "type": "agency"
            }

### Get Agency [GET]

### Example
```no-highlight
http://api.govtribe.com/agency
```

+ Response 200

    [Agency][]

+ Response 404

    + Headers

            X-GT-API-Version: 3.0

    + Body

            "not found"
            
## Related [/agency/{_id}/{type}]
Get entites related to the agency. Only relations active in the last 12 months are returned.

+ Parameters

    + _id (required, string, `51548151db40a5165c0000cd`) ... The agency _id
    + type (required, string, `person`) ... The related entity type


### Get Related [GET]

### Example
```no-highlight
http://api.govtribe.com/person
```

+ Response 200
    
    [Agency List][]

+ Response 404

    + Headers

            X-GT-API-Version: 3.0

    + Body

            "not found"

## Dollar Flow [/agency/{_id}/dollar-flow]
Get data about how much money this agency spends.

+ Parameters

    + _id (required, string, `51548151db40a5165c0000cd`) ... The agency _id
    
+ Model

    + Headers

            X-GT-API-Version: 3.0

    + Body

             {
                "today": "$1,534,114.90",
                "thisWeek": "$112,822,788.27",
                "thisMonth": "$236,169,882.44",
                "thisQuarter": "$236,169,882.44",
                "thisYear": "$941,144,133.44",
                "2014-03-month": "$209,382,503.22",
                "2014-02-month": "$356,718,244.12",
                "2014-01-month": "$138,873,503.66",
                "2013-12-month": "$228,544,620.33",
                "2013-11-month": "$146,258,061.44",
                "2013-10-month": "$422,595,166.73",
                "2013-09-month": "$9,889,688,360.20",
                "2013-08-month": "$300,490,980.59",
                "2013-07-month": "$380,406,667.94",
                "2013-06-month": "$3,211,813,773.48",
                "2013-05-month": "$286,416,394.58",
                "2013-04-month": "$167,759,349.48",
                "2013-03-month": "$549,529,884.59",
                "2013-02-month": "$76,105,828.70",
                "2013-01-month": "$77,642,828.12",
                "2012-12-month": "$644,561,871.59",
                "2012-11-month": "$1,485,725,746.05",
                "2012-10-month": "$586,620,107.61",
                "2012-09-month": "$475,269,763.48",
                "2012-08-month": "$3,128,207,789.58",
                "2012-07-month": "$279,898,573.10",
                "2012-06-month": "$387,697,080.68",
                "2012-05-month": "$232,034,605.28"
            }

### Get Dollar Flow [GET]

### Example
```no-highlight
http://api.govtribe.com/agency/51548151db40a5165c0000cd/dollar-flow
```

+ Response 200
    
    [Dollar Flow][]
