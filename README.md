[![Build Status](https://travis-ci.org/GovTribe/api.png?branch=master)](https://travis-ci.org/GovTribe/api)

GovTribe's Government Data API
======
Get unified access to federal procurement data from a single API. We extract several types of entities:

* **Project** - A U.S. federal government contract or opportunity
* **Agency**  - A U.S. federal government agency that executes Projects
* **Office**  - An organizational unit within an Agency that executes Projects
* **Person**  - A point of contact for one or more Projects
* **Vendor**  - A legal entity that has been awarded a Project
* **Category**  - A topical grouping, based off North American Industry Classification System (NAICS) codes or Product and Service (PSC) codes
* **Protest**  - A GAO protest entity
* **Activity**  - Activity represents the ongoing activity of one or more of the other entity types.

# Getting Started
To use the API you'll need a free API key. You can register for one at http://api.govtribe.com/register. Check out some of the usage examples here, or the full API documentation at http://api.govtribe.com/.

Right now, the only HTTP method it uses is GET, and the only response format it supports is JSON.

## Required Headers
Make sure to tell the API your key and what version you'd like with each request:
```
X-GT-API-Key: myapikey
X-GT-API-Version 3.0
```
If you don't provide X-GT-API-Version, the API will default to the most recent version.

## Collection Of Projects
Let's say you'd like to view some recent projects. Send a GET request to the project endpoint like so:
```json
GET http://api.govtribe.com/project
{
  "results": [
    {
      "name": "Bread and Bakery Products for Florida",
      "type": "project",
      "_id": "537e2c5d6c5cc86f2a8b4567"
    },
    {
      "name": "Spar,Aircraft/19F Aircraft,F15",
      "type": "project",
      "_id": "537e2c766c5cc8af2a8b4567"
    },
    {
      "name": "Sea Survival Training Facility and Refurbishing of Floating Pier",
      "type": "project",
      "_id": "537e08da6c5cc8f35b8b4567"
    },
    {
      "name": "Chapel Music Director",
      "type": "project",
      "_id": "5332d4e46c5cc86a238b4567"
    },
    {
      "name": "Framing Lumber and Hardware/Fasteners",
      "type": "project",
      "_id": "537e181c6c5cc8167c8b4567"
    }
  ],
  "pagination": {
    "total": 184961,
    "count": 50,
    "perPage": 50,
    "currentPage": 1,
    "totalPages": 3700,
    "links": {
      "next": "http://api.govtribe.dev/project?page=2"
    }
  }
}
```

## Single Project 
```json
GET http://api.govtribe.com/project
{
  "agencies": [
    {
      "name": "Department of the Army",
      "type": "agency",
      "_id": "51548151db40a5165c0000cf"
    }
  ],
  "awardData": {
    "totalAwardValue": "Not Available",
    "awardedVendors": [],
    "basePeriodAwardData": [],
    "optionPeriodsAwardData": []
  },
  "categories": [
    {
      "name": "Building Construction",
      "type": "category",
      "_id": "518ecbf0db40a51b0b000075"
    },
    {
      "name": "Construction and building Materials",
      "type": "category",
      "_id": "518ecbf0db40a51b0b000033"
    },
    {
      "name": "Construction of structures and facilities",
      "type": "category",
      "_id": "518ecbf0db40a51b0b000067"
    }
  ],
  "classCodes": [
    "Y"
  ],
  "contractNumbers": [],
  "files": [],
  "goodsOrServices": "Services",
  "govTribeStats": {},
  "importantDates": [
    {
      "date": "2014-05-22T09:43:00-0400",
      "valueSource": "Sourced",
      "dateType": "Presolicitation Posting"
    },
    {
      "date": "2014-06-05T00:00:00-0400",
      "valueSource": "Sourced",
      "dateType": "Presolicitation Due"
    }
  ],
  "NAICS": [
    "236220"
  ],
  "name": "Sea Survival Training Facility and Refurbushing of Floating Pier",
  "obligationData": {
    "obligations": []
  },
  "offices": [
    {
      "name": "U.S. Army Corps of Engineers",
      "type": "office",
      "_id": "51c1d4f8db40a5298c79c77f"
    },
    {
      "name": "USACE Middle East District",
      "type": "office",
      "_id": "51c1d675ca985fad340001de"
    }
  ],
  "placeOfPerformanceText": "USACE Middle East District P.O. Box 2250, Winchester VA 22604-1450 US",
  "placesOfPerformanceGeocoded": [
    {
      "type": "Point",
      "coordinates": [
        -98.7372244786,
        40.4230003233
      ],
      "attributes": {
        "name": "United States",
        "type": "Country"
      }
    }
  ],
  "pointsOfContact": [
    {
      "name": "Lorna Patricia Beckman",
      "type": "person",
      "_id": "533330f66c5cc8404c8b4567"
    }
  ],
  "predictedCompetition": [],
  "protests": [],
  "setAsideType": "Not Available",
  "solicitationNumbers": [
    "W912ER-14-R-0024"
  ],
  "sourceLinks": [
    "https://www.fbo.gov/index?s=opportunity&mode=form&id=251bc85aa683af5a33610bf7cba48be5&tab=core&_cview=0"
  ],
  "synopses": [],
  "tags": [
    "civil/site/utilities",
    "sea survival training facility",
    "floating pier proposed solicitation number",
    "training facility",
    "floating pier"
  ],
  "timestamp": "2014-05-22T10:17:00-0400",
  "type": "project",
  "workflowStatus": "Open",
  "_id": "537e08da6c5cc8f35b8b4567"
}
```
