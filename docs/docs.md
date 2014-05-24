FORMAT: 1A
HOST: http://api.govtribe.com

# GovTribe API (beta)

# Group What Is This?
The [GovTribe](http://www.govtribe.com) API provides data on the U.S. federal government contracting market. The GovTribe API presents eight types of entities as well as their relationships to each other:

* **Project** - A U.S. federal government contract or opportunity
* **Agency**  - A U.S. federal government agency that executes Projects
* **Office**  - An organizational unit within an Agency that executes Projects
* **Person**  - A point of contact for one or more Projects
* **Vendor**  - A legal entity that has been awarded a Project
* **Category**  - A topical grouping, based off North American Industry Classification System (NAICS) codes or Product and Service (PSC) codes
* **Protest**  - The laws and regulations that govern contracting with the federal government are designed to ensure that federal procurements are conducted fairly and, whenever possible, in a way that maximizes competition. On occasion, however, bidders or others interested in government procurements may have reason to believe that a contract has been or is about to be awarded improperly or illegally, or that they have been unfairly denied a contract or an opportunity to compete for a contract. This is a protest.
* **Activity**  - Activity represents the ongoing activity of one or more of the other entity types. It is a time series of the actions they perform.

To request an API key, visit the [API registration page](https://api.govtribe.com/register). To log issues or feature requests, visit https://github.com/GovTribe/api.

## Examples

### Recent Projects
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

### Project
Success! You are a sea survival enthusiast who likes rebuilding piers. Why not take a look at that project? It's number two in the list of results. Just grab the id and you are off and running. 
```json
GET http://api.govtribe.com/project/537e08da6c5cc8f35b8b4567
```

### Office
Looks like this is an Army Corps of Engineers project. Ever wonder how long it takes them to award projects? Or what the average award size is? Let's grab the id from the offices array and find out.
```json
GET http://api.govtribe.com/office/51c1d4f8db40a5298c79c77f
```

### Activity
Interested in everything else Army Corps of Engineers does? Load its activity:
```json
GET http://api.govtribe.com/activity/feed?ids=51c1d4f8db40a5298c79c77f
```

Now that you get the gist of it, check out the docs below on all of the great data you can get from the GovTribe API

#### Disclaimer
The GovTribe API is currently in beta. As such, it's subject to change and all API data and services are provided as is. We reserve the right to make changes to the API during beta without notification. Have an issue or feature request? Log it on our [GitHub repo](https://github.com/GovTribe/api). Additional disclaimer at the bottom of this page. 


# Group Collection

## Entity Collection [/{entityType}/]
Collection of one of the eight types of entities, returned as a paginated list of NTIs (name, type, ID), ordered by timestamp.

+ Parameters
    
    + entityType (required, string `project`) ... The type of entities to be returned
        + Values
            + `project`
            + `vendor`
            + `category`
            + `agency`
            + `office`
            + `person`
            + `protest`
            + `activity`


+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec
    
    + Body
    
            {
                results: [
                    {
                        name: "Temperature Monitor",
                        type: "project",
                        _id: "5363ed276c5cc873538b4567"
                    },
                    {
                        name: "Rebuild Cumberland Sound",
                        type: "project",
                        _id: "537666f56c5cc8717e8b4567"
                    },
                    {
                        name: "New Starts Financial Capacity Assessments and Financial Assessment",
                        type: "project",
                        _id: "5282d11ae3dd90f84d000000"
                    }
                ],
                pagination: {
                    total: 182146,
                    count: 50,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 3643,
                    links: {
                        next: "http://api.govtribe.com/project?page=2"
                    }
                }
            }
            

    + Schema

            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of entities available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number of returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number of returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type" : "string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["project", "agency", "office", "person", "vendor", "category", "activity", "protest"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"],
                        }
                        "required": ["pagination", "results"]     
                    }
                }
            }

### List Entities [GET]


+ Request Entities
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Entity Collection][]
    


# Group Project

## Project [/project/{_id}]
A project is a U.S. federal government contract or opportunity. 

+ Parameters
    + _id (required, string, `5375057a6c5cc8435b8b4567`) ... String `id` of the desired project entity to return.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                agencies: [
                    {
                        name: "Agency for International Development",
                        type: "agency",
                        _id: "51548150db40a5165c0000af"
                    }
                ],
                awardedVendors: "None Listed",
                awardValue: "Not Available",
                awardValueNumeric: "Not Available",
                categories: [
                    {
                        name: "Architecture and Engineering",
                        type: "category",
                        _id: "518ecbf0db40a51b0b0000c4"
                    },
                    {
                    name: "Architect and engineering services",
                    type: "category",
                    _id: "518ecbf0db40a51b0b000054"
                    }
                ],
                classCodes: [
                    "C"
                ],
                contractNumbers: "None Listed",
                dueDates: [
                    {
                        dueDateType: "Presolicitation Response",
                        date: "Not Available"
                    },
                    {
                    dueDateType: "Complete Response",
                    date: "2014-07-17T14:00:00-0400"
                    }
                ],
                files: [
                    {
                        packageName: "Combined Synopsis/Solicitation",
                        packageDetails: [
                            {
                                fileURI: "https://www.fbo.gov/utils/view?id=bcba3445f4084328fa3bc40a559692c9",
                                fileName: "SOL-278-14-000010.pdf",
                                fileDescription: "SOL-278-14-000010 - Water Sector Infrastructure Project in Jordan"
                            }
                        ]
                    }
                ],
                goodsOrServices: "Services",
                NAICS: "541330",
                name: "Water Sector Infrastructure Project",
                offices: [
                    {
                        name: "Washington D.C.",
                        type: "office",
                        _id: "51c1d52bdb40a5298c79c7ca"
                    },
                    {
                    name: "USAID/Washington",
                    type: "office",
                    _id: "51c1d52bdb40a5298c79c7cb"
                    }
                ],
                placeOfPerformanceGeocoded: "Not Available",
                placeOfPerformanceText: "Jordan Jordan",
                pointsOfContact: [
                    {
                        name: "Beatrice Diah",
                        type: "person",
                        _id: "537114ed6c5cc884708b4567"
                    }
                ],
                predictedCompetition: "None Listed",
                protests: "None Listed",
                setAsideType: "Not Available",
                solicitationNumbers: [
                    "SOL-278-14-000010"
                ],
                sourceLinks: [
                    "https://www.fbo.gov/index?s=opportunity&mode=form&id=0c662f01e4c17d26274813ef05c0fc10&tab=core&_cview=0"
                ],
                synopsis: "<p class="MsoNormal" style="line-height:115%;"><br />The United States Agency for International Development (USAID) Mission to Jordan, is seeking proposals from interested qualified Jordanian Architect-Engineer (A-E) Consulting Firms, to provide construction supervision services for the construction contracts of Amman Water System Improvements Phase II, East Jerash Wastewater Treatment Plant and Tafilah Wastewater Treatment Plant.  This is in addition to other engineering infrastructure development tasks that USAID in cooperation with Ministry of Water and Irrigation may plan to implement during the life of the proposed contract. Detailed information is provided in the attached Request for proposal.</p> <br /><p class="MsoNormal" style="line-height:115%;"> </p> <br /><p class="MsoNormal" style="line-height:115%;"> </p> <br /><p class="MsoNormal" style="line-height:115%;"> </p>",
                tags: [
                    "construction supervision services",
                    "east jerash wastewater treatment plant",
                    "tafilah wastewater treatment plant",
                    "the united states agency for international development",
                    "ministry of water and irrigation"
                ],
                timestamp: "2014-05-15T11:16:00-0400",
                type: "project",
                workflowStatus: "Open",
                _id: "5375057a6c5cc8435b8b4567"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string",
                        "description": "The unique ID for the Project"
                    },
                    "NAICS" : {
                        "type" : "string",
                        "description" : "The North American Industry Classification Code assigned to the Project.",
                        "default" : "Not Available"
                    },
                    "setAsideType" : {
                        "type" : "string",
                        "description": "The set aside designated for a project",
                        "default" : "None",
                        "enum" : ["None", "Total Small Business", "Service-Disabled Veteran-Owned Small Business", "HUBZone", "Competitive 8(a)", "Woman Owned Small Business", "Partial Small Business", "Economically Disadvantaged Woman Owned Small Business", "Emerging Small Business", "Total HBCU / MI", "Partial HBCU / MI"]
                    },
                    "importantDates": {
                        "type" : "array",
                        "description" : "All due dates for a project across its lifecycle",
                        "items" : { 
                            "type" : "object",
                            "description" : "A specific due date for project",
                            "properties" : {
                                "dateType" : {
                                    "type" : "string",
                                    "description" : "The type of event or workflow status for a date",
                                    "enum" : ["Forecast", "Presolicitation Posting", "Presolicitation Due", "Solicitation Posting", "Solicitation Due", "Award", "Contract End", "Base Period End", "Option Period End"]
                                },
                                "date" : {
                                    "type" : "string",
                                    "description" : "The value for a specific date",
                                    "default" : "Not Available",
                                    "format" : "date-time"
                                },
                                "valueSource" : {
                                    "type" : "string",
                                    "default" : "Not Available",
                                    "description" : "An indication of whether the date value is derived from mining source data or predicted by GovTribe",
                                    "enum" : ["Sourced", "Predicted"] 
                                }
                            }
                        }
                    },
                    "workflowStatus" : {
                        "type" : "string",
                        "enum" : ["Forecasted", "Presolicitation", "Open For Bid", "Canceled", "Awarded", "Active", "Ended"],
                        "description" : "The status of a specific project with respect to the contracting lifecycle"
                    },
                    "pointsOfContact" : {
                        "type" : "array",
                        "description" : "The NTIs for the government points of contact associated with a project",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a government point of contact",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the person"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["person"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                                
                            }
                        }
                    },
                    "goodsOrServices" : {
                        "type" : "string",
                        "description" : "Indicates whether a project is for goods or Services",
                        "enum" : ["Goods", "Services"]
                    },
                    "placeOfPerformanceText" : {
                        "type" : "string",
                        "default" : "Not Available",
                        "description" : "The raw string mined for a place of performance"
                    },
                    "placesOfPerformanceGeocoded": {
                        "type" : "array",
                        "description" : "Geocoded places of performance for a project. Will resolve to the lowest level of detail possible for the mined POP string.",
                        "items" : {
                            "type" : "object",
                            "description" : "A geocoded place of performance for a project. Conforms to GEOJSON Point spec.",
                            "properties" : {
                                "attributes" : {
                                    "type" : "object",
                                    "description" : "Stuff",
                                    "properties" : {
                                        "type": {
                                            "type": "string",
                                            "description" : "The type of the attribute. i.e Country."
                                        },
                                        "name" : {
                                            "type" : "string",
                                            "description" : "The name of the point."
                                        }
                                    }
                                },
                                "type" : {
                                    "type" : "string",
                                    "description" :  "The type of the geocoded place of performance"
                                }, 
                                "coordinates" : {
                                    "type" : "array",
                                    "items" : {
                                        "type" : "number",
                                        "description" : "The lat and long for a given coordinate"
                                    }
                                },
                                "coordinateType" : {
                                    "type" : "string",
                                    "description" : "The type of the coordinate. Usually a point."
                                }
                            }
                        }
                    },
                    "sourceLinks" : {
                        "type" : "array",
                        "description" : "Listing of source data providers for this project",
                        "items" : {
                            "type" : "string",
                            "description" : "A source link string",
                            "format" : "uri"
                        }
                    },
                    "awardedVendors" : {
                        "type" : "array",
                        "description" : "The NTIs for all vendors receiving awards for this project",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a vendor",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the vendor"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["vendor"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "predictedCompetition" : {
                        "type" : "array",
                        "description" : "The NTIs for all vendors predicted by GovTribe to compete for this project.",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a vendor",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the vendor"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["vendor"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                },
                                "intersects" : {
                                    "type" : "number",
                                    "description" : "Special sauce."
                                }
                            }
                        }
                    },
                    "solicitationNumbers" : {
                        "type" : "array",
                        "description" : "A listing of all solicitation numbers for a specific project",
                        "items" : {
                            "type" : "string",
                            "description" : "A solicitation number"
                        }
                    },
                    "files": {
                        "type" : "array",
                        "description" : "All files or attachments associated with a project",
                        "items" : {
                            "type" : "object",
                            "description" : "A package or grouping of files",
                            "properties" : {
                                "packageName" : {
                                    "type" : "string",
                                    "description" : "The name of the file package"
                                },
                                "packageDetails" : {
                                    "type" : "array",
                                    "description" : "A listing of file data for a package",
                                    "items" : {
                                        "type" : "object",
                                        "description" : "Data for a specific file or attachment",
                                        "properties" : {
                                            "fileURI" : {
                                                "type" : "string",
                                                "description" : "URI for a specific file"
                                            },
                                            "fileName" : {
                                                "type" : "string",
                                                "description" : "The name of the file"
                                            },
                                            "fileDescription" : {
                                                "type" : "string",
                                                "description" : "The description of the file"
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "classCodes" : {
                        "type" : "array",
                        "description" : "The Products and Services Class (PSC) Codes for a project",
                        "items" : {
                            "type" : "string",
                            "description" : "A PSC Code"
                        }
                    },
                    "tags": {
                        "type" : "array",
                        "description" : "The topical tags for a project",
                        "items" : {
                            "type" : "string",
                            "description" : "A tag or topic extracted from the project"
                        }
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time a project was changed",
                        "format" : "date-time"
                    },
                    "agencies" : {
                        "type" : "array",
                        "description" : "The NTIs for all agencies managing this project",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a n agency",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the agency"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["agency"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "contractNumbers" : {
                        "type" : "array",
                        "description" : "A listing of all contract numbers for a specific project",
                        "items" : {
                            "type" : "string",
                            "description" : "A contract number"
                        }
                    },
                    "categories" : {
                        "type" : "array",
                        "description" : "The NTIs for all categories related to this project",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a category",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the category"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["category"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of a project"
                    },
                    "synopses" : {
                        "type" : "array",
                        "description" : "All of the synopses for a project across its lifecycle, provided in reverse order of occurrence",
                        "items" : {
                            "type" : "string",
                            "description" : "A synopsis, trimmed to 15000 characters."
                        }
                    },
                    "offices" : {
                        "type" : "array",
                        "description" : "The NTIs for all offices managing this project",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for an office",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the office"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["office"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "default" : "project"
                    },
                    "obligtationData" :  {
                        "type" : "object",
                        "description" : "Information related to the award of this project",
                        "properties": {
                            "totalObligationsToDate" : {
                                "type" : "number",
                                "description" : "The total amount obligated to the project.",
                                "minValue" : "0.00"
                            },
                            "obligations" : {
                                "type" : "array",
                                "description" : "A collection of individual obligations for a project, with references to vendors",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A single obligation record",
                                    "properties" : {
                                        "vendor" :  {
                                            "type" : "object",
                                            "description" : "An NTI for a vendor related to an obligation",
                                            "properties" : {
                                                "name": {
                                                    "type":"string",
                                                    "description": "The name of the entity"
                                                },
                                                "type": {
                                                    "type":"string",
                                                    "enum": ["vendor"],
                                                    "description": "The type of the entity"
                                                },
                                                "_id": {
                                                    "type":"string",
                                                    "description": "The unique ID for the entity"
                                                }
                                            }
                                        },
                                        "obligationAmount" : {
                                            "type" : "number",
                                            "description" : "The amount for the obligation. Can be negative"
                                        },
                                        "anotherObligationProperty" : {
                                            "type" : "number",
                                            "description" : "Something else."
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "awardData" :  {
                        "type" : "object",
                        "description" : "Information related to the award of this project",
                        "properties": {
                            "totalAwardValue" : {
                                "type" : "number",
                                "description" : "The total amount of dollars awarded across all base and option years"
                            },
                            "awardedVendors" : {
                                "type" : "array",
                                "description" : "A collection of all vendor NTIs who were awarded the project",
                                "items" : { 
                                    "type" : "object",
                                    "description" : "A base period award object for specific vendor",
                                    "properties" : {
                                         "name" : {
                                            "type" : "string",
                                            "description" : "The name of the vendor"
                                        }, 
                                        "type" : {
                                            "type": "string",
                                            "description" : "The type of the entity. Will always be vendor."
                                        },
                                        "_id" : {
                                            "type" : "string",
                                            "description" : "The unique _id for the entity."
                                        },
                                        "amount" : {
                                            "type" : "number",
                                            "description" : "The dollar amount awarded for the base period",
                                            "minValue" : "0"
                                        }
                                    }
                                }
                            },
                            "basePeriodAwardData" : {
                                "type" : "object",
                                "description" : "Base period Award Data for each vendor awarded a contract for a project.",
                                "properties" : {
                                    "startDate" : {
                                        "type" : "string",
                                        "description" : "The starting date for the base award period",
                                        "format" : "date-time"
                                    },
                                    "endDate" : {
                                        "type" : "string",
                                        "description" : "The end date for the base award period",
                                        "format" : "date-time"
                                    },
                                    "totalValue" : {
                                        "type" : "number",
                                        "description" : "The total amount across all awards of the base period"
                                    },
                                    "awardedVendors" : {
                                        "type" : "array",
                                        "description" : "A collection of vendor NTIs and their award values for the base award period",
                                        "items" : { 
                                            "type" : "object",
                                            "description" : "A base period award object for specific vendor",
                                            "properties" : {
                                                 "name" : {
                                                    "type" : "string",
                                                    "description" : "The name of the vendor"
                                                }, 
                                                "type" : {
                                                    "type": "string",
                                                    "description" : "The type of the entity. Will always be vendor."
                                                },
                                                "_id" : {
                                                    "type" : "string",
                                                    "description" : "The unique _id for the entity."
                                                },
                                                "amount" : {
                                                    "type" : "number",
                                                    "description" : "The dollar amount awarded for the base period",
                                                    "minValue" : "0"
                                                }
                                            }
                                        }
                                    }
                                }
                            },
                            "optionPeriodsAwardData" : {
                                "type" : "array",
                                "description" : "Option periods award data",
                                "items" : {
                                    "type" : "object",
                                    "description" : "Base period Award Data for each vendor awarded a contract for a project.",
                                    "properties" : {
                                        "optionName" : {
                                            "type" : "string",
                                            "description" : "The name of the option period"
                                        },
                                        "optionNumber" : {
                                            "type" : "number",
                                            "description" : "The number, in sequential order of the option period"
                                        },
                                        "startDate" : {
                                            "type" : "string",
                                            "description" : "The starting date for the base award period",
                                            "format" : "date-time"
                                        },
                                        "endDate" : {
                                            "type" : "string",
                                            "description" : "The end date for the base award period",
                                            "format" : "date-time"
                                        },
                                        "totalValue" : {
                                            "type" : "number",
                                            "description" : "The total amount across all awards the option period"
                                        },
                                        "awardedVendors" : {
                                            "type" : "array",
                                            "description" : "A collection of vendor NTIs and their award values for the option award period",
                                            "items" : { 
                                                "type" : "object",
                                                "description" : "An option period award object for specific vendor",
                                                "properties" : {
                                                     "name" : {
                                                        "type" : "string",
                                                        "description" : "The name of the vendor"
                                                    }, 
                                                    "type" : {
                                                        "type": "string",
                                                        "description" : "The type of the entity. Will always be vendor."
                                                    },
                                                    "_id" : {
                                                        "type" : "string",
                                                        "description" : "The unique _id for the entity."
                                                    },
                                                    "amount" : {
                                                        "type" : "number",
                                                        "description" : "The dollar amount awarded for the option period",
                                                        "minValue" : "0"
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
    

### Retrieve a Single Project [GET]
+ Request Project
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Project][]
   


 

## Search Projects [/project/search/{?q}]
Search Projects by keyword or phrase. GovTribe searches project names and synopses.

+ Parameters

    + q (required, string `Green Laser`) ... The string with which we will query the projects

    
+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
        
            {
                results: [
                    {
                        highlights: {
                            name: [
                                "<em class="highlight">Green</em> <em class="highlight">Laser</em> and Photomultipler Tubes for LSR II Custom Flow Cytometer"
                            ],
                            synopsis: [
                                " of this equipment. For this purchase order, NINDS are requesting that NINDS flow cytometer be upgraded to include a 532 nm <em class="highlight">green</em> <em class="highlight">laser</em> and 5 additional detectors that will enable NINDS instrument",
                                " are unable to optimally excite them. A 532 nm <em class="highlight">green</em> <em class="highlight">laser</em> is required to optimally excite these red fluorescent proteins. Having a <em class="highlight">green</em> <em class="highlight">laser</em> would give us the ability to flow cytometrically analyze"
                            ]
                        },
                        name: "Green Laser and Photomultipler Tubes for LSR II Custom Flow Cytometer",
                        type: "project",
                        _id: "537403cb6c5cc8961b8b4567"
                    },
                    {
                        highlights: {
                            name: [
                                "<em class="highlight">Laser</em> Scanning Microscope"
                            ],
                            synopsis: [
                                " <em class="highlight">Green</em> Blue range - this specification shall be included as a proposed upgrade to the system being proposed. Fluorescence resonance energy transfer and anisotropy - this specification is revised",
                                ") <em class="highlight">Laser</em> Scanning Microscope with a 34-Channel Spectral Detection ability, and 5 <em class="highlight">laser</em> lines with optional <em class="highlight">lasers</em>. The following list of essential features needs to be achieved in order to satisfy"
                            ]
                        }
                ],
                pagination: {
                    total: 60,
                    count: 50,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 2,
                    links: {
                        next: "http://api.govtribe.com/project/search?page=2"
                    }
                }
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of entities available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number of returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number of returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                },
                                "highlights" : {
                                    "type" : "object",
                                    "description" : "One or more snippets of text that matches the search query. Keyed by source property",
                                    "properties" : {
                                        "name" : {
                                            "type" : "array",
                                            "description" : "Strings with emphasis tags for highlighting",
                                            "items" : {
                                                "type" : "string"
                                            {
                                        },
                                        "synopses" : {
                                            "type" : "array",
                                            "description" : "Strings with emphasis tags for highlighting",
                                            "items" : {
                                                "type" : "string"
                                            {
                                        }
                                    }
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", , "score"]
                        },
                        "required": ["pagination", "results"]     
                    }
                }
            }


### Retrieve Project Search Results [GET]

Search all projects by keyword

+ Request Search Projects
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search Projects][]

## Filtered Projects [/project/{?setAsideType,workflowStatus,agency,office,person,vendor,category}]
Returns a paginated list of filtered projects, ordered by their timestamp property. Multiple filters will use an AND operator. For example, if setAsideType is set to `HUBZone` and agency is set to `51548151db40a5165c0000cf`, the returned results will be projects that are both HUBZone set aside and from the U.S. Army.

### Retrieve Projects with Specific Attributes [GET]


+ Parameters
    
    + setAsideType (optional, string `HUBZone`) ... The set aside type for the Project
        
        + Values
            + `Total Small Business`
            + `Service-Disabled Veteran-Owned Small Business`
            + `HUBZone`
            + `Competitive 8(a)`
            + `Woman Owned Small Business`
            + `Partial Small Business`
            + `Economically Disadvantaged Woman Owned Small Business`
            + `Emerging Small Business`
            + `Total HBCU / MI`
            + `Partial HBCU / MI`
    
    + workflowStatus (optional, string) ... The workflow status for the Project
        
        + Values
            + `Forecasted`
            + `Presolicitation`
            + `Open For Bid`
            + `Awarded`
            + `Canceled`
            + `Active`
            + `Ended`
            
    + agency = `` (optional, string, `51548151db40a5165c0000cf`) ... The _id for a specific Agency 
    + office = `` (optional, string) ... The _id for a specific Office
    + person = `` (optional, string) ... The _id for a specific Person
    + vendor = `` (optional, string) ... The _id for a specific vendor
    + category = `` (optional, string) ... The _id for a specific category


+ Request Project
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Entity Collection][]
    


# Group Agency

## Agency [/agency/{_id}]
An agency is a U.S. government agency. Ain't that descriptive?  

+ Parameters
    + _id (required, string, `51548151db40a5165c0000cf`) ... String `id` of the desired agency entity.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                acronyms: "None Listed",
                name: "Department of the Army",
                organizationalStats: {
                    activePeople: [
                        {
                            calendarYear: "2014",
                            numberOfActivePeople: 875
                        },
                        {
                            calendarYear: "2013",
                            numberOfActivePeople: 1619
                        },
                        {
                            calendarYear: "2012",
                            numberOfActivePeople: 1918
                        },
                        {
                            calendarYear: "2011",
                            numberOfActivePeople: 1625
                        },
                        {
                            calendarYear: "2010",
                            numberOfActivePeople: 675
                        },
                        {
                            calendarYear: "2009",
                            numberOfActivePeople: 543
                        }
                    ],
                    activeOffices: [
                        {
                            calendarYear: "2014",
                            numberOfActiveOffices: 258
                        },
                        {
                            calendarYear: "2013",
                            numberOfActiveOffices: 223
                        },
                        {
                            calendarYear: "2012",
                            numberOfActiveOffices: 241
                        },
                        {
                            calendarYear: "2011",
                            numberOfActiveOffices: 196
                        },
                        {
                            calendarYear: "2010",
                            numberOfActiveOffices: 128
                        },
                        {
                            calendarYear: "2009",
                            numberOfActiveOffices: 111
                        }
                    ]
                },
                procurementStats: {
                    averageTimesToAward: [
                        {
                            calendarYear: "2014",
                            averageDaysToAward: 110.47
                        },
                        {
                            calendarYear: "2013",
                            averageDaysToAward: 91.92
                        },
                        {
                            calendarYear: "2012",
                            averageDaysToAward: 64.45
                        },
                        {
                            calendarYear: "2011",
                            averageDaysToAward: 9.57
                        },
                        {
                            calendarYear: "2010",
                            averageDaysToAward: 13.73
                        },
                        {
                            calendarYear: "2009",
                            averageDaysToAward: 13.06
                        }
                    ],
                    averageAwardValues: [
                        {
                            calendarYear: "2014",
                            averageAwardValue: 11965169.06
                        },
                        {
                            calendarYear: "2013",
                            averageAwardValue: 11894880.62
                        },
                        {
                            calendarYear: "2012",
                            averageAwardValue: 25546209.72
                        },
                        {
                            calendarYear: "2011",
                            averageAwardValue: 89761384.97
                        },
                        {
                            calendarYear: "2010",
                            averageAwardValue: 96852948.16
                        },
                        {
                            calendarYear: "2009",
                            averageAwardValue: 7430766.99
                        }
                    ],
                    numbersOfAwards: [
                        {
                            calendarYear: "2014",
                            numberOfAwards: 1719
                        },
                        {
                            calendarYear: "2013",
                            numberOfAwards: 4411
                        },
                        {
                            calendarYear: "2012",
                            numberOfAwards: 6419
                        },
                        {
                            calendarYear: "2011",
                            numberOfAwards: 5320
                        },
                        {
                            calendarYear: "2010",
                            numberOfAwards: 1138
                        },
                        {
                            calendarYear: "2009",
                            numberOfAwards: 966
                        }
                    ],
                    awardDollarFlow: {
                        today: 0,
                        thisWeek: 148341777.13,
                        thisMonth: 503230537.14,
                        thisQuarter: 5831231807.13,
                        thisYear: 20386608066.23,
                        allTime: 20386608066.23,
                        2014-04-month: 5328001269.99,
                        2014-03-month: 3800413275.13,
                        2014-02-month: 9630370523.77,
                        2014-01-month: 1124592460.2,
                        2013-12-month: 1449648610.12,
                        2013-11-month: 2175770809.4,
                        2013-10-month: 1974476383.37,
                        2013-09-month: 7825484168.42,
                        2013-08-month: 1838764350.1,
                        2013-07-month: 18068994550.09,
                        2013-06-month: 3100957293.55,
                        2013-05-month: 9078726397.22,
                        2013-04-month: 2763633901.91,
                        2013-03-month: 1310812589.55,
                        2013-02-month: 1475941878.09,
                        2013-01-month: 963641264.23,
                        2012-12-month: 104992540930.43,
                        2012-11-month: 16416646333.67,
                        2012-10-month: 1694819138,
                        2012-09-month: 15002461247.51,
                        2012-08-month: 2783199307.25,
                        2012-07-month: 5655826879.27,
                        2012-06-month: 2181023697.54,
                        2012-05-month: 3166580107.72
                    }
                },
                protestStats: {
                    totalProtests: [
                        {
                            calendarYear: "2014",
                            totalProtests: 104
                        },
                        {
                            calendarYear: "2013",
                            totalProtests: 340
                        },
                        {
                            calendarYear: "2012",
                            totalProtests: 183
                        },
                        {
                            calendarYear: "2011",
                            totalProtests: 1
                        }
                    ],
                    protestsWithdrawn: [
                        {
                            calendarYear: "2014",
                            numberOfProtests: 20
                        },
                        {
                            calendarYear: "2013",
                            numberOfProtests: 65
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 25
                        }
                    ],
                    protestsDenied: [
                        {
                            calendarYear: "2014",
                            numberOfProtests: 11
                        },
                        {
                            calendarYear: "2013",
                            numberOfProtests: 72
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 37
                        },
                        {
                            calendarYear: "2011",
                            numberOfProtests: 1
                        }
                    ],
                    protestsSustained: [
                        {
                            calendarYear: "2013",
                            numberOfProtests: 6
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 4
                        }
                    ],
                    protestsDismissed: [
                        {
                            calendarYear: "2014",
                            numberOfProtests: 51
                        },
                        {
                            calendarYear: "2013",
                            numberOfProtests: 193
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 114
                        }
                    ]
                },
                timestamp: "2014-05-18T12:52:00-0400",
                type: "agency",
                website: "http://www.army.mil/",
                _id: "51548151db40a5165c0000cf"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string",
                        "description": "The unique ID for the agency"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time an agency was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of the agency"
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "default" : "agency"
                    },
                    "acronyms" : {
                        "type" : "array",
                        "description" : "Common acronyms for the agency",
                        "items" : {
                            "type" : "string",
                            "description" : "An acronym"
                        }
                    },
                    "website" : {
                        "type" : "string",
                        "description" : "The website for the agency.",
                        "format" : "uri"
                    },
                    "procurementStats" : {
                        "type" : "object",
                        "description" : "Statistics about the agencies public procurements, broken down by year. Updated daily.",
                        "properties" : {
                            "averageTimesToAward" : {
                                "type" : "array",
                                "description" : "A list of the average number of days for the agencies' Projects to move from Open for Bid to Award or Canceled for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "The average number of days for the agencies' Projects to move from Open for Bid to Award or Canceled for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageDaysToAward" : {
                                            "type" : "number",
                                            "description" : "The number of days"
                                        }
                                    }
                                }
                            },
                            "averageAwardValues" : {
                                "type" : "array",
                                "description" : "A list of the average award values for an agencies projects for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Average award value for an agencies' projects for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageAwardValue" : {
                                            "type" : "number",
                                            "description" : "The average award value"
                                        }
                                    }
                                }
                            },
                            "numbersOfAwards" : {
                                "type" : "array",
                                "description" : "A list of the numbers of awards for an agency, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of awards for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfAwards" : {
                                            "type" : "number",
                                            "description" : "The number of awards. Does not differentiate with respect to competitive nature of process."
                                        }
                                    }
                                }
                            },
                            "awardDollarFlow" : {
                                "type"  "array",
                                "description" : "The total award values for an entity, grouped by time buckets, going back two years.",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A time bucket of total award value",
                                    "properties" : " {
                                        "timeBucket" : {
                                            "type" : "string",
                                            "description" : "A human readable time bucket"
                                        },
                                        "total" : {
                                            "type" : "string",
                                            "description" : "The total amount awarded for a time bucket. 
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "organizationalStats" : {
                        "type" : "object",
                        "description" : "Statistics about the organization, including active people and office counts. Updated daily.",
                        "properties" : {
                            "activePeople" : {
                                "type" : "array",
                                "description" : "A list of the numbers of active people for an agency, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of active people for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfActivePeople" : {
                                            "type" : "number",
                                            "description" : "The number of active people."
                                        }
                                    }
                                }
                            },
                            "activeOffices" : {
                                "type" : "array",
                                "description" : "A list of the numbers of active offices for an agency, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of active offices for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfActiveOffices" : {
                                            "type" : "number",
                                            "description" : "The number of active offices."
                                        }
                                    }
                                }
                            }
                        }
                    }, 
                    "obligationStats" : {
                        "type" : "object",
                        "description" : "Obligation stats about an organization, broken down by year.",
                        "properties" : {
                            "totalObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Total obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "obligationsDollarFlow" : {
                                "type"  "array",
                                "description" : "The total obligation values for an entity, grouped by time buckets, going back two years.",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A time bucket of total obligations",
                                    "properties" : " {
                                        "timeBucket" : {
                                            "type" : "string",
                                            "description" : "A human readable time bucket"
                                        },
                                        "total" : {
                                            "type" : "string",
                                            "description" : "The total amount obligated for a time bucket. 
                                        }
                                    }
                                }
                            }
                            "totalSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as the Total Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "serviceDisabledVeteranOwnedSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as the Service-Disabled Veteran-Owned Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "HUBZoneObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as HUBZone Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "competitive8aObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Competitive 8(a) Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "womanOwnedSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Woman Owned Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "partialSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Partial Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "economicallyDisadvantagedWomanOwnedSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Economically Disadvantaged Woman Owned Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "emergingSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Emerging Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "totalHBCUMIObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Total HBCU / MI Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "partialHBCUMIObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Partial HBCU / MI Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                        }
                    },
                    "protestStats" : {
                        "type" : "object",
                        "description" : "Protest stats for the projects of an organization, including breakdowns by protest status.",
                        "properties" : {
                            "totalProtests" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests for an agency, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of total protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsWithdrawn" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Withdrawn, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsDenied" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Denied, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsSustained" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Sustained, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsDismissed" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Dismissed, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "govTribeStats : {
                        "type" : "object",
                        "description" : "Proprietary GovTribe stats about the organization",
                        "properties" : {
                        }
                    }
                }
            }

    

### Retrieve a Single Agency [GET]
+ Request Agency
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Agency][]
   

## Agency Slices [/agency/{_id}/{slice}]
Returns a listing (slice) of NTIs that are related to an agency based on the slice name. For example, the `vendorsThatWinTotalSmallBusinessSetAsideProjects` slice will return a list of vendor NTIs for a given agency that have won projects designated as a Total Small Business set aside.


+ Parameters

    + _id (required, string, `51548151db40a5165c0000cf`) ... id of the desired Agency Entity
    + slice (required, string, `vendorsThatWinTotalSmallBusinessSetAsideProjects`) ... A list of entities or slice, relative to the agency. 
    
        + Values
            + `vendorsThatWinTotalSmallBusinessSetAsideProjects`
            + `vendorsThatWinServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinHUBZoneSetAsideProjects`
            + `vendorsThatWinCompetitive8ASetAsideProjects`
            + `vendorsThatWinWomanOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinPartialSmallBusinessSetAsideProjects`
            + `vendorsThatWinEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinEmergingSmallBusinessSetAsideProjects`
            + `vendorsThatWinTotalHBCUMISetAsideProjects`
            + `vendorsThatWinPartialHBCUMISetAsideProjects`
            + `officesThatPostTotalSmallBusinessSetAsideProjects`
            + `officesThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `officesThatPostHUBZoneSetAsideProjects`
            + `officesThatPostCompetitive8ASetAsideProjects`
            + `officesThatPostWomanOwnedSmallBusinessSetAsideProjects`
            + `officesThatPostPartialSmallBusinessSetAsideProjects`
            + `officesThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `officesThatPostEmergingSmallBusinessSetAsideProjects`
            + `officesThatPostTotalHBCUMISetAsideProjects`
            + `officesThatPostPartialHBCUMISetAsideProjects`
            + `peopleThatPostTotalSmallBusinessSetAsideProjects`
            + `peopleThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `peopleThatPostHUBZoneSetAsideProjects`
            + `peopleThatPostCompetitive8ASetAsideProjects`
            + `peopleThatPostWomanOwnedSmallBusinessSetAsideProjects`
            + `peopleThatPostPartialSmallBusinessSetAsideProjects`
            + `peopleThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `peopleThatPostEmergingSmallBusinessSetAsideProjects`
            + `peopleThatPostTotalHBCUMISetAsideProjects`
            + `peopleThatPostPartialHBCUMISetAsideProjects`
            + `categoriesThatContainTotalSmallBusinessSetAsideProjects`
            + `categoriesThatContainServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainHUBZoneSetAsideProjects`
            + `categoriesThatContainCompetitive8ASetAsideProjects`
            + `categoriesThatContainWomanOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainPartialSmallBusinessSetAsideProjects`
            + `categoriesThatContainEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainEmergingSmallBusinessSetAsideProjects`
            + `categoriesThatContainTotalHBCUMISetAsideProjects`
            + `categoriesThatContainPartialHBCUMISetAsideProjects`

            
    

### Retrieve a Slice for an Agency [GET]

+ Request Slice
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Entity Collection][]


## Search Agencies [/agency/search/{?q}]
Find Agencies by their name or acronym

+ Parameters

    + q (required, string `Defense`) ... The string with which we will query the agencies

    
+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
        
            {
                results: [
                    {
                        name: "Other Defense Agencies",
                        type: "agency",
                        _id: "51548152db40a5165c000108"
                    },
                    {
                        name: "Defense Logistics Agency",
                        type: "agency",
                        _id: "51548150db40a5165c0000be"
                    },
                    {
                        name: "Defense Information Systems Agency",
                        type: "agency",
                        _id: "51548150db40a5165c0000bd"
                    },
                    {
                        name: "Defense Contract Management Agency",
                        type: "agency",
                        _id: "51548150db40a5165c0000bc"
                    },
                    {
                        name: "Defense Nuclear Facilities Safety Board",
                        type: "agency",
                        _id: "51548150db40a5165c0000bf"
                    }
                ],
                pagination: {
                    total: 5,
                    count: 5,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 1,
                    links: [ ]
                }
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of results available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"]
                        },
                        "required": ["pagination", "results"]     
                    }
                }
            }


### Retrieve Agency Search Results [GET]

Search all agencies by keyword

+ Request Search Projects
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search Agencies][]


# Group Office

## Office [/office/{_id}]
An Office is a sub unit of a U.S. government agency 

+ Parameters
    + _id (required, string, `51c1d4dadb40a5298c79c731`) ... String `id` of the desired Office entity.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                acronyms: "None Listed",
                agencies: [
                    {
                        name: "Department of the Navy",
                        type: "agency",
                        _id: "51548151db40a5165c0000d1"
                    }
                ],
                name: "Naval Sea Systems Command",
                organizationalStats: {
                    activePeople: [
                        {
                            calendarYear: "2014",
                            numberOfActivePeople: 151
                        },
                        {
                            calendarYear: "2013",
                            numberOfActivePeople: 198
                        },
                        {
                            calendarYear: "2012",
                            numberOfActivePeople: 94
                        },
                        {
                            calendarYear: "2011",
                            numberOfActivePeople: 71
                        },
                        {
                            calendarYear: "2010",
                            numberOfActivePeople: 20
                        },
                        {
                            calendarYear: "2009",
                            numberOfActivePeople: 13
                        }
                    ],
                    activeOffices: [
                        {
                            calendarYear: "2014",
                            numberOfActiveOffices: 146
                        },
                        {
                            calendarYear: "2013",
                            numberOfActiveOffices: 23
                        },
                        {
                            calendarYear: "2012",
                            numberOfActiveOffices: 14
                        },
                        {
                            calendarYear: "2011",
                            numberOfActiveOffices: 13
                        },
                        {
                            calendarYear: "2010",
                            numberOfActiveOffices: 9
                        },
                        {
                            calendarYear: "2009",
                            numberOfActiveOffices: 7
                        }
                    ]
                },
                procurementStats: {
                    averageTimesToAward: [
                        {
                            calendarYear: "2014",
                            averageDaysToAward: 113.59
                        },
                        {
                            calendarYear: "2013",
                            averageDaysToAward: 132.29
                        },
                        {
                            calendarYear: "2012",
                            averageDaysToAward: 137.81
                        },
                        {
                            calendarYear: "2011",
                            averageDaysToAward: 4.5
                        },
                        {
                            calendarYear: "2010",
                            averageDaysToAward: 30
                        },
                        {
                            calendarYear: "2009",
                            averageDaysToAward: 36.5
                        }
                    ],
                    averageAwardValues: [
                        {
                            calendarYear: "2014",
                            averageAwardValue: 3401455.14
                        },
                        {
                            calendarYear: "2013",
                            averageAwardValue: 6202982.77
                        },
                        {
                            calendarYear: "2012",
                            averageAwardValue: 2285385.1
                        },
                        {
                            calendarYear: "2011",
                            averageAwardValue: 3508468.52
                        },
                        {
                            calendarYear: "2010",
                            averageAwardValue: 5618548.28
                        },
                        {
                            calendarYear: "2009",
                            averageAwardValue: 2369390.18
                        }
                    ],
                    numbersOfAwards: [
                        {
                            calendarYear: "2014",
                            numberOfAwards: 264
                        },
                        {
                            calendarYear: "2013",
                            numberOfAwards: 388
                        },
                        {
                            calendarYear: "2012",
                            numberOfAwards: 206
                        },
                        {
                            calendarYear: "2011",
                            numberOfAwards: 95
                        },
                        {
                            calendarYear: "2010",
                            numberOfAwards: 20
                        },
                        {
                            calendarYear: "2009",
                            numberOfAwards: 13
                        }
                    ],
                    awardDollarFlow: {
                        today: 0,
                        thisWeek: 12657074.88,
                        thisMonth: 118190100.14,
                        thisQuarter: 457346079.47,
                        thisYear: 913224015.29,
                        allTime: 913224015.29,
                        2014-04-month: 339155979.33,
                        2014-03-month: 142927918.83,
                        2014-02-month: 260969080.38,
                        2014-01-month: 51980936.61,
                        2013-12-month: 88395250.03,
                        2013-11-month: 58808489.18,
                        2013-10-month: 317393819.65,
                        2013-09-month: 415028080.22,
                        2013-08-month: 304413311.24,
                        2013-07-month: 32885815.27,
                        2013-06-month: 1062215381.71,
                        2013-05-month: 41092511.06,
                        2013-04-month: 54773434.48,
                        2013-03-month: 9150521.2,
                        2013-02-month: 7620522.93,
                        2013-01-month: 23433853.89,
                        2012-12-month: 62273821.58,
                        2012-11-month: 10009850.33,
                        2012-10-month: 43145987.99,
                        2012-09-month: 49322083.31,
                        2012-08-month: 40593626.58,
                        2012-07-month: 139524335.2,
                        2012-06-month: 45004452.58,
                        2012-05-month: 18831631.04
                    }
                },
                protestStats: {
                    totalProtests: [
                        {
                            calendarYear: "2014",
                            totalProtests: 17
                        },
                        {
                            calendarYear: "2013",
                            totalProtests: 47
                        },
                        {
                            calendarYear: "2012",
                            totalProtests: 28
                        }
                    ],
                    protestsWithdrawn: [
                        {
                            calendarYear: "2014",
                            numberOfProtests: 5
                        },
                        {
                            calendarYear: "2013",
                            numberOfProtests: 9
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 5
                        }
                    ],
                    protestsDenied: [
                        {
                            calendarYear: "2013",
                            numberOfProtests: 9
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 8
                        }
                    ],
                    protestsSustained: [
                        {
                            calendarYear: "2014",
                            numberOfProtests: 2
                        },
                        {
                            calendarYear: "2013",
                            numberOfProtests: 1
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 1
                        }
                    ],
                    protestsDismissed: [
                        {
                            calendarYear: "2014",
                            numberOfProtests: 8
                        },
                        {
                            calendarYear: "2013",
                            numberOfProtests: 26
                        },
                        {
                            calendarYear: "2012",
                            numberOfProtests: 14
                        }
                    ]
                },
                timestamp: "2014-05-18T10:03:00-0400",
                type: "office",
                website: "Not Available",
                _id: "51c1d4dadb40a5298c79c731"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string",
                        "description": "The unique ID for the office"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time an office was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of the office"
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity"
                    },
                    "acronyms" : {
                        "type" : "array",
                        "description" : "Common acronyms for the office",
                        "items" : {
                            "type" : "string",
                            "description" : "An acronym"
                        }
                    },
                    "website" : {
                        "type" : "string",
                        "description" : "The website for the office",
                        "format" : "uri"
                    },
                    "agencies" : {
                        "type" : "array"
                        "description" : "The NTIs for all related to this office",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for an agency",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the agency"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "procurementStats" : {
                        "type" : "object",
                        "description" : "Statistics about the office's public procurements, broken down by year. Updated daily.",
                        "properties" : {
                            "averageTimesToAward" : {
                                "type" : "array",
                                "description" : "A list of the average number of days for the office's Projects to move from Open for Bid to Award or Canceled for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "The average number of days for the office's Projects to move from Open for Bid to Award or Canceled for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageTimeToAward" : {
                                            "type" : "number",
                                            "description" : "The number of days"
                                        }
                                    }
                                }
                            },
                            "averageAwardValues" : {
                                "type" : "array",
                                "description" : "A list of the average award values for an office's projects for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Average award value for an office's projects for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageAwardValue" : {
                                            "type" : "number",
                                            "description" : "The average award value"
                                        }
                                    }
                                }
                            },
                            "numbersOfAwards" : {
                                "type" : "array",
                                "description" : "A list of the numbers of awards for an office, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of awards for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfAwards" : {
                                            "type" : "number",
                                            "description" : "The number of awards. Does not differentiate with respect to competitive nature of process."
                                        }
                                    }
                                }
                            },
                            "awardDollarFlow" : {
                                "type"  "array",
                                "description" : "The total award values for an entity, grouped by time buckets, going back two years.",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A time bucket of total award value",
                                    "properties" : " {
                                        "timeBucket" : {
                                            "type" : "string",
                                            "description" : "A human readable time bucket"
                                        },
                                        "total" : {
                                            "type" : "string",
                                            "description" : "The total amount awarded for a time bucket. 
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "organizationalStats" : {
                        "type" : "object",
                        "description" : "Statistics about the office, including active people. Updated daily.",
                        "properties" : {
                            "activePeople" : {
                                "type" : "array",
                                "description" : "A list of the numbers of active people for an agency, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of active people for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfActivePeople" : {
                                            "type" : "number",
                                            "description" : "The number of active people."
                                        }
                                    }
                                }
                            }
                        }
                    }, 
                    "obligationStats" : {
                        "type" : "object",
                        "description" : "Obligation stats about an office, broken down by year.",
                        "properties" : {
                            "totalObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Total obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "obligationsDollarFlow" : {
                                "type"  "array",
                                "description" : "The total obligation values for an entity, grouped by time buckets, going back two years.",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A time bucket of total obligations",
                                    "properties" : " {
                                        "timeBucket" : {
                                            "type" : "string",
                                            "description" : "A human readable time bucket"
                                        },
                                        "total" : {
                                            "type" : "string",
                                            "description" : "The total amount obligated for a time bucket. 
                                        }
                                    }
                                }
                            },
                            "totalSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as the Total Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "serviceDisabledVeteranOwnedSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as the Service-Disabled Veteran-Owned Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "HUBZoneObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as HUBZone Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "competitive8aObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Competitive 8(a) Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "womanOwnedSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Woman Owned Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "partialSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Partial Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "economicallyDisadvantagedWomanOwnedSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Economically Disadvantaged Woman Owned Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "emergingSmallBusinessObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Emerging Small Business Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "TotalHBCUMIObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Total HBCU / MI Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                            "partialHBCUMIObligations" : {
                                "type" : "array",
                                "description" : "A list of total obligations designated as Partial HBCU / MI Set Aside, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Obligations for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "obligations" : {
                                            "type" : "number",
                                            "description" : "The total dollar value of the obligations."
                                        }
                                    }
                                }
                            },
                        }
                    },
                    "protestStats" : {
                        "type" : "object",
                        "description" : "Protest stats for the projects of an office, including breakdowns by protest status.",
                        "properties" : {
                            "totalProtests" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests for an agency, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of total protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsWithdrawn" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Withdrawn, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsDenied" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Denied, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsSustained" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Sustained, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            },
                            "protestsDismissed" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests with a status of Dismissed, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "govTribeStats : {
                        "type" : "object",
                        "description" : "Proprietary GovTribe stats about the organization",
                        "properties" : {
                        }
                    }
                }
            }
    

### Retrieve a Single Office [GET]
+ Request Agency
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Office][]
   

## Office Slices [/office/{_id}/slice/{sliceName}]
Returns a listing (slice) of NTIs that are related to an office based on the slice name. For example, the `vendorsThatWinTotalSmallBusinessSetAsideProjects` slice will return a list of vendor NTIs for a given agency that have won projects designated as a Total Small Business set aside.


+ Parameters

    + _id (required, string, `51c1d4dadb40a5298c79c731`) ... id of the desired Office Entity
    + sliceName (required, string, `vendorsThatWinTotalSmallBusinessSetAsideProjects`) ... A list of entities or slice, relative to the office. 
    
        + Values
            + `vendorsThatWinTotalSmallBusinessSetAsideProjects`
            + `vendorsThatWinServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinHUBZoneSetAsideProjects`
            + `vendorsThatWinCompetitive8ASetAsideProjects`
            + `vendorsThatWinWomanOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinPartialSmallBusinessSetAsideProjects`
            + `vendorsThatWinEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinEmergingSmallBusinessSetAsideProjects`
            + `vendorsThatWinTotalHBCUMISetAsideProjects`
            + `vendorsThatWinPartialHBCUMISetAsideProjects`
            + `peopleThatPostTotalSmallBusinessSetAsideProjects`
            + `peopleThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `peopleThatPostHUBZoneSetAsideProjects`
            + `peopleThatPostCompetitive8ASetAsideProjects`
            + `peopleThatPostWomanOwnedSmallBusinessSetAsideProjects`
            + `peopleThatPostPartialSmallBusinessSetAsideProjects`
            + `peopleThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `peopleThatPostEmergingSmallBusinessSetAsideProjects`
            + `peopleThatPostTotalHBCUMISetAsideProjects`
            + `peopleThatPostPartialHBCUMISetAsideProjects`
            + `categoriesThatContainTotalSmallBusinessSetAsideProjects`
            + `categoriesThatContainServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainHUBZoneSetAsideProjects`
            + `categoriesThatContainCompetitive8ASetAsideProjects`
            + `categoriesThatContainWomanOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainPartialSmallBusinessSetAsideProjects`
            + `categoriesThatContainEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainEmergingSmallBusinessSetAsideProjects`
            + `categoriesThatContainTotalHBCUMISetAsideProjects`
            + `categoriesThatContainPartialHBCUMISetAsideProjects`

            
    

### Retrieve a Slice for an Office [GET]

+ Request Slice
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Entity Collection][]


## Search Offices [/office/search/{?q}]
Find an office by its name or acronym.

+ Parameters

    + q (required, string `Prisons`) ... The string with which we will query the offices

    
+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
        
            {
                results: [
                    {
                        name: "Bureau of Prisons",
                        type: "office",
                        _id: "51c1d4e1db40a5298c79c74c"
                    }
                ],
                pagination: {
                    total: 1,
                    count: 1,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 1,
                    links: [ ]
                }
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of results available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"]
                        },
                        "required": ["pagination", "results"]     
                    }
                }
            }


### Retrieve Office Search Results [GET]

Search all agencies by keyword

+ Request Search Projects
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search Offices][]

# Group Person

## Person [/person/{_id}]
An Person is a U.S. government point of contact for one or more projects 

+ Parameters
    + _id (required, string, `51c275c6ca985fa61e000099`) ... String `id` of the desired Person entity.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                agencies: [
                    {
                        name: "Department of Agriculture",
                        type: "agency",
                        _id: "51548150db40a5165c0000c2"
                    }
                ],
                email: "martha.garza@aphis.usda.gov",
                name: "Martha Garza",
                offices: [
                    {
                        name: "Animal and Plant Health Inspection Service",
                        type: "office",
                        _id: "51c1d616ca985fad34000035"
                    },
                    {
                        name: "Administrative Services Division/IT Contracting",
                        type: "office",
                        _id: "51c1d6fbca985fe03500002c"
                    }
                ],
                phone: "956-205-7604",
                position: "Contract Specialist",
                procurementStats: {
                    averageTimesToAward: [
                        {
                            calendarYear: "2012",
                            averageDaysToAward: 174
                        }
                    ],
                    averageAwardValues: [
                        {
                            calendarYear: "2012",
                            averageAwardValue: 2747633.92
                        }
                    ],
                    numbersOfAwards: [
                        {
                            calendarYear: "2012",
                            numberOfAwards: 2
                        }
                    ],
                    awardDollarFlow: {
                        today: 0,
                        thisWeek: 0,
                        thisMonth: 0,
                        thisQuarter: 0,
                        thisYear: 0,
                        allTime: 5495267.84,
                        2014-04-month: 0,
                        2014-03-month: 0,
                        2014-02-month: 0,
                        2014-01-month: 0,
                        2013-12-month: 0,
                        2013-11-month: 0,
                        2013-10-month: 0,
                        2013-09-month: 0,
                        2013-08-month: 0,
                        2013-07-month: 0,
                        2013-06-month: 0,
                        2013-05-month: 0,
                        2013-04-month: 0,
                        2013-03-month: 0,
                        2013-02-month: 0,
                        2013-01-month: 0,
                        2012-12-month: 0,
                        2012-11-month: 0,
                        2012-10-month: 5495267.84,
                        2012-09-month: 0,
                        2012-08-month: 0,
                        2012-07-month: 0,
                        2012-06-month: 0,
                        2012-05-month: 0
                    }
                },
                timestamp: "2014-05-18T13:59:00-0400",
                type: "person",
                _id: "51c275c6ca985fa61e000099"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string",
                        "description": "The unique ID for the person"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time a person was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of the person. Defaults to email if no name found."
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "enum" : ["agency"]
                    },
                    "email" : {
                        "type" : "string",
                        "description" : "The email for a person",
                        "format" : "email"
                    },
                    "phone" : {
                        "type" : "string",
                        "description" : "The phone number for a person"
                    },
                    "position" : {
                        "type" : "string",
                        "description" : "The last known position for a person"
                    },
                    "agencies" : {
                        "type" : "array"
                        "description" : "The NTIs for all agencies related to this person",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a n agency",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the agency"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "offices" : {
                        "type" : "array"
                        "description" : "The NTIs for all offices related to this person",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for an office",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the office"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "procurementStats" : {
                        "type" : "object",
                        "description" : "Statistics about the person's public procurements, broken down by year. Updated daily.",
                        "properties" : {
                            "averageTimesToAward" : {
                                "type" : "array",
                                "description" : "A list of the average number of days for the person's Projects to move from Open for Bid to Award or Canceled for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "The average number of days for the person's Projects to move from Open for Bid to Award or Canceled for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageTimeToAward" : {
                                            "type" : "number",
                                            "description" : "The number of days"
                                        }
                                    }
                                }
                            },
                            "averageAwardValues" : {
                                "type" : "array",
                                "description" : "A list of the average award values for an persons's projects for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Average award value for an person's projects for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageAwardValue" : {
                                            "type" : "number",
                                            "description" : "The average award value"
                                        }
                                    }
                                }
                            },
                            "numbersOfAwards" : {
                                "type" : "array",
                                "description" : "A list of the numbers of awards for a person, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of awards for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfAwards" : {
                                            "type" : "number",
                                            "description" : "The number of awards. Does not differentiate with respect to competitive nature of process."
                                        }
                                    }
                                }
                            },
                            "awardDollarFlow" : {
                                "type"  "array",
                                "description" : "The total award values for an entity, grouped by time buckets, going back two years.",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A time bucket of total award values",
                                    "properties" : " {
                                        "timeBucket" : {
                                            "type" : "string",
                                            "description" : "A human readable time bucket"
                                        },
                                        "total" : {
                                            "type" : "string",
                                            "description" : "The total amount awarded for a time bucket. 
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "govTribeStats : {
                        "type" : "object",
                        "description" : "Proprietary GovTribe stats about the organization",
                        "properties" : {
                        }
                    }
                }
            }
    

### Retrieve a Single Person [GET]
+ Request Person
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Person][]


## Person Slices [/person/{_id}/slice/{sliceName}]
Returns a listing (slice) of NTIs that are related to an person based on the slice name. For example, the `vendorsThatWinTotalSmallBusinessSetAsideProjects` slice will return a list of vendor NTIs for a given person that have won projects designated as a Total Small Business set aside.


+ Parameters

    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... id of the desired Office Entity
    + sliceName (required, string, `vendorsThatWinTotalSmallBusinessSetAsideProjects`) ... A list of entities or slice, relative to the office. 
    
        + Values
            + `vendorsThatWinTotalSmallBusinessSetAsideProjects`
            + `vendorsThatWinServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinHUBZoneSetAsideProjects`
            + `vendorsThatWinCompetitive8ASetAsideProjects`
            + `vendorsThatWinWomanOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinPartialSmallBusinessSetAsideProjects`
            + `vendorsThatWinEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `vendorsThatWinEmergingSmallBusinessSetAsideProjects`
            + `vendorsThatWinTotalHBCUMISetAsideProjects`
            + `vendorsThatWinPartialHBCUMISetAsideProjects`
            + `categoriesThatContainTotalSmallBusinessSetAsideProjects`
            + `categoriesThatContainServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainHUBZoneSetAsideProjects`
            + `categoriesThatContainCompetitive8ASetAsideProjects`
            + `categoriesThatContainWomanOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainPartialSmallBusinessSetAsideProjects`
            + `categoriesThatContainEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects`
            + `categoriesThatContainEmergingSmallBusinessSetAsideProjects`
            + `categoriesThatContainTotalHBCUMISetAsideProjects`
            + `categoriesThatContainPartialHBCUMISetAsideProjects`

            
    

### Retrieve a Slice for a Person [GET]

+ Request Slice
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Entity Collection][]


## Search People [/person/search/{?q}]
Find a person by their name, email, telephone number, or position.

+ Parameters

    + q (required, string `Nash`) ... The string with which we will query the people
    
+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
        
            {
                results: [
                    {
                        name: "David Nash",
                        type: "person",
                        _id: "5339da796c5cc8b95e8b4567"
                    },
                    {
                        name: "Patty H. Nash",
                        type: "person",
                        _id: "51c2766dca985f5c1f0001cf"
                    },
                    {
                        name: "Linda Nash-Gallaher",
                        type: "person",
                        _id: "51c28a20ca985f0244000033"
                    },
                    {
                        name: "Bridget R. Nash",
                        type: "person",
                        _id: "52a5cdc6e3dd90cc3c8b4567"
                    },
                    {
                        name: "Gerard R. Nash",
                        type: "person",
                        _id: "51c27aceca985fdc250002c8"
                    },
                    {
                        name: "Robert Nash",
                        type: "person",
                        _id: "51c2771aca985f8a20000342"
                    },
                    {
                        name: "Charles Nash",
                        type: "person",
                        _id: "530d03573a8a942b080029fe"
                    },
                    {
                        name: "Deborah Nash",
                        type: "person",
                        _id: "530cfc653a8a942b08000666"
                    },
                    {
                        name: "Mary Priddy-Nash",
                        type: "person",
                        _id: "530cfca53a8a942b080009d4"
                    },
                    {
                        name: "Bridget R. Nash",
                        type: "person",
                        _id: "51c2752fca985f181d000278"
                    },
                    {
                        name: "Robert Nash",
                        type: "person",
                        _id: "530d0a743a8a942b080034d1"
                    },
                    {
                        name: "Deborah Nash",
                        type: "person",
                        _id: "530cfd4b3a8a942b08001129"
                    },
                    {
                        name: "Gilser A Nash",
                        type: "person",
                        _id: "51c290cbca985f554e000019"
                    },
                    {
                        name: "Rick Nash",
                        type: "person",
                        _id: "51dc2e5dca985f8133000000"
                    }
                ],
                pagination: {
                    total: 14,
                    count: 14,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 1,
                    links: [ ]
                }
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of results available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"]
                        },
                        "required": ["pagination", "results"]     
                    }
                }
            }



### Retrieve Person Search Results [GET]


+ Request Search Projects
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search People][]


# Group Vendor

## Vendor [/vendor/{_id}]
An Vendor is an entity that has been awarded a Project 

+ Parameters
    + _id (required, string, `51ed43bdca985f6c78000018`) ... String `id` of the desired Vendor entity.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                name: "Deloitte",
                procurementStats: {
                    NAICSWon: [
                        "541990",
                        "541611",
                        "541511",
                        "541512",
                        "541513",
                        "518210",
                        "541690",
                        "541519",
                        "541219",
                        "541199"
                    ],
                    setAsideTypesWon: [
                        "Partial Small Business"
                    ],
                    classCodesWon: [
                        "R",
                        "D",
                        "70",
                        "L",
                        "B",
                        "A"
                    ],
                    numbersOfAwards: [
                        {
                            calendarYear: "2014",
                            numberOfAwards: 6
                        },
                        {
                            calendarYear: "2013",
                            numberOfAwards: 31
                        },
                        {
                            calendarYear: "2012",
                            numberOfAwards: 14
                        },
                        {
                            calendarYear: "2011",
                            numberOfAwards: 7
                        },
                        {
                            calendarYear: "2010",
                            numberOfAwards: 2
                        },
                        {
                            calendarYear: "2009",
                            numberOfAwards: 1
                        }
                    ],
                    awardDollarFlow: {
                        today: 0,
                        thisWeek: 0,
                        thisMonth: 0,
                        thisQuarter: 250000000,
                        thisYear: 257201014.18,
                        allTime: 257201014.18,
                        2014-04-month: 250000000,
                        2014-03-month: 0,
                        2014-02-month: 7201014.18,
                        2014-01-month: 0,
                        2013-12-month: 0,
                        2013-11-month: 7604399,
                        2013-10-month: 3512815.52,
                        2013-09-month: 1205134,
                        2013-08-month: 48279679.6,
                        2013-07-month: 1103420323.75,
                        2013-06-month: 5007044975.15,
                        2013-05-month: 13015651.4,
                        2013-04-month: 89904109,
                        2013-03-month: 77950601.4,
                        2013-02-month: 14777824,
                        2013-01-month: 62000000,
                        2012-12-month: 496997943,
                        2012-11-month: 0,
                        2012-10-month: 724290051,
                        2012-09-month: 128012807.03,
                        2012-08-month: 0,
                        2012-07-month: 0,
                        2012-06-month: 0,
                        2012-05-month: 25324963
                    }
                },
                protestStats: {
                    totalProtests: [
                        {
                            calendarYear: "2013",
                            totalProtests: 4
                        },
                        {
                            calendarYear: "2012",
                            totalProtests: 2
                        }
                    ]
                },
                timestamp: "2014-04-28T11:21:06-0400",
                type: "vendor",
                websites: [
                    "www.deloitte.com"
                ],
                _id: "51ed43bdca985f6c78000018"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string",
                        "description": "The unique ID for the Vendor"
                    },
                    "websites" : {
                        "type" : "array",
                        "description" : "A listing of websites for this vendor",
                        "minLength" : 0,
                        "uniqueItems" : true,
                        "items" : {
                            "type" : "string",
                            "description" : "A uri for a vendor's website",
                            "format" : "uri"
                        }
                    },
                    "NAICSWon" : {
                        "type" : "array",
                        "minLength" : 0,
                        "uniqueItems": true,
                        "description": "The North American Industry Classification Code for Projects this vendor has won",
                        "items" : {
                            "type" : "string",
                            "description" : "A  North American Industry Classification Code"
                        }
                    },
                    "setAsideTypesWon" : {
                        "type" : "array",
                        "minLength" : 0,
                        "uniqueItems": true,
                        "description": "The Set Aside Types for Projects this vendor has won",
                        "items" : {
                            "type" : "string",
                            "description" : "A  Set Aside Type"
                        }
                    },
                    "classCodesWon" : {
                        "type" : "array",
                        "minLength" : 0,
                        "uniqueItems": true,
                        "description" : "The Products and Services Class (PSC) Codes for projects this vendor has won",
                        "items" : {
                            "type" : "string",
                            "description" : "A PSC Code"
                        }
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time the vendor was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of a project"
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "enum" : ["vendor"]
                    },
                    "procurementStats" : {
                        "type" : "object",
                        "description" : "Procurement stats for a vendor.",
                        "properties" : {
                            "numbersOfAwards" : {
                                "type" : "array",
                                "minLength" : 0,
                                "description" : "A list of the numbers of total awards for a vendor, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of total awards for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfAwards" : {
                                            "type" : "number",
                                            "description" : "The number of awards"
                                        }
                                    }
                                }
                            },
                            "awardDollarFlow" : {
                                "type"  "array",
                                "description" : "The total award values for an entity, grouped by time buckets, going back two years.",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A time bucket of total award value",
                                    "properties" : " {
                                        "timeBucket" : {
                                            "type" : "string",
                                            "description" : "A human readable time bucket"
                                        },
                                        "total" : {
                                            "type" : "string",
                                            "description" : "The total amount awarded for a time bucket. 
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "protestStats" : {
                        "type" : "object",
                        "description" : "Protest stats for a vendor.",
                        "properties" : {
                            "totalProtests" : {
                                "type" : "array",
                                "minLength" : 0,
                                "description" : "A list of the numbers of total protests for a vendor, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of total protests for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of protests."
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "obligationStats" : {
                        "type" : "array",
                        "minLength" : 0,
                        "description" : "The obligations for a vendor, broken down by year and agency.",
                        "items" : {
                            "type" : "object",
                            "description" : "Total obligations for a given year, broken down by top 5 agencies",
                            "properties" : {
                                 "totalObligations" : {
                                    "type" : "number",
                                    "description" : "The total amount of obligations to a vendor for a given year"
                                },
                                "calendarYear" : {
                                    "type" : "string",
                                    "description" : "A calendar year"
                                },
                                "agenciesBreakdown" : {
                                    "type" : "array",
                                    "minLength" : 0,
                                    "maxLength" : 6,
                                    "description" : "The percentage of a vendors total obligations for that year, split by agency. Top 5 listed. Remainder listed as All Other Agencies",
                                    "items" : {
                                        "type" : "object",
                                        "description" : "A percentage of the vendor's obligations for a specific agency",
                                        "properties"  : {
                                            "agencyName" : {
                                                "type" : "string",
                                                "description" : "The name of the agency. Will only be an actual agency for the top 5. Remainder noted as All Other Agencies"
                                            },
                                            "percentage" : {
                                                "type" : "number",
                                                "description" : "The percentage of a vendors total obligations for this agency"
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "govTribeStats" : {
                        "type" : "object",
                        "description" : "Proprietary GovTribe stats about a vendor",
                        "properties" : {
                        }
                    }
                }
            }
    

### Retrieve a Single Vendor [GET]
+ Request Vendor
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Vendor][]

## Search Vendors [/vendor/search/{?q}]
Find a vendor by name.

+ Parameters

    + q (required, string `Deloitte`) ... The string with which we will query the vendors

    
+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
        
            {
                results: [
                    {
                        name: "Deloitte",
                        type: "vendor",
                        _id: "51ed43bdca985f6c78000018"
                    }
                ],
                pagination: {
                    total: 1,
                    count: 1,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 1,
                    links: [ ]
                }
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of results available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"]
                        },
                        "required": ["pagination", "results"]     
                    }
                }
            }


### Retrieve Vendor Search Results [GET]

+ Request Search Vendors
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search Vendors][]
    
    
## Vendor Slices [/vendor/{_id}/slice/{sliceName}]
Returns a listing (slice) of NTIs that are related to a vendor based on the slice name. For example, the `agenciesThatAwardToThisVendor` slice will return a list of agency NTIs that have awarded projects to this vendor.


+ Parameters

    + _id (required, string, `51ed43bdca985f6c78000018`) ... id of the desired vendor entity
    + sliceName (required, string, `agenciesThatAwardToThisVendor`) ... A list of entities or slice, relative to the vendor. 
    
        + Values
            + `agenciesThatAwardToThisVendor`
            + `officesThatAwardToThisVendor`
            + `peopleThatAwardToThisVendor`
            + `categoriesThatContainAwardsToThisVendor`


### Retrieve a Slice for a Vendor [GET]

+ Request Slice
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Entity Collection][]

# Group Category

## Category [/category/{_id}]
Categories are a hierarchical topical grouping construct. They are based on NAICS codes and PSC codes.  

+ Parameters
    + _id (required, string, `518ecbf0db40a51b0b000067`) ... String `id` of the desired Category entity.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                childCategories: "None Listed",
                name: "Construction of structures and facilities",
                organizationalStats: {
                    activePeople: [
                        {
                            calendarYear: "2014",
                            numberOfActivePeople: 281
                        },
                        {
                            calendarYear: "2013",
                            numberOfActivePeople: 675
                        },
                        {
                            calendarYear: "2012",
                            numberOfActivePeople: 792
                        },
                        {
                            calendarYear: "2011",
                            numberOfActivePeople: 469
                        },
                        {
                            calendarYear: "2010",
                            numberOfActivePeople: 219
                        },
                        {
                            calendarYear: "2009",
                            numberOfActivePeople: 124
                        }
                    ],
                    activeOffices: [
                        {
                            calendarYear: "2014",
                            numberOfActiveOffices: 210
                        },
                        {
                            calendarYear: "2013",
                            numberOfActiveOffices: 372
                        },
                        {
                            calendarYear: "2012",
                            numberOfActiveOffices: 389
                        },
                        {
                            calendarYear: "2011",
                            numberOfActiveOffices: 278
                        },
                        {
                            calendarYear: "2010",
                            numberOfActiveOffices: 172
                        },
                        {
                            calendarYear: "2009",
                            numberOfActiveOffices: 116
                        }
                    ]
                },
                parentCategories: {
                    name: "Services",
                    type: "category",
                    _id: "518ecbf0db40a51b0b000002"
                },
                procurementStats: {
                    averageTimesToAward: [
                        {
                            calendarYear: "2014",
                            averageDaysToAward: 149.42
                        },
                        {
                            calendarYear: "2013",
                            averageDaysToAward: 119.72
                        },
                        {
                            calendarYear: "2012",
                            averageDaysToAward: 107.99
                        },
                        {
                            calendarYear: "2011",
                            averageDaysToAward: 21.2
                        },
                        {
                            calendarYear: "2009",
                            averageDaysToAward: 15
                        }
                    ],
                    averageAwardValues: [
                        {
                            calendarYear: "2014",
                            averageAwardValue: 8100565.31
                        },
                        {
                            calendarYear: "2013",
                            averageAwardValue: 9617817.01
                        },
                        {
                            calendarYear: "2012",
                            averageAwardValue: 14451089.48
                        },
                        {
                            calendarYear: "2011",
                            averageAwardValue: 37259376.26
                        },
                        {
                            calendarYear: "2010",
                            averageAwardValue: 11563504.14
                        },
                        {
                            calendarYear: "2009",
                            averageAwardValue: 6810072.36
                        }
                    ],
                    numbersOfAwards: [
                        {
                            calendarYear: "2014",
                            numberOfAwards: 341
                        },
                        {
                            calendarYear: "2013",
                            numberOfAwards: 1045
                        },
                        {
                            calendarYear: "2012",
                            numberOfAwards: 1305
                        },
                        {
                            calendarYear: "2011",
                            numberOfAwards: 832
                        },
                        {
                            calendarYear: "2010",
                            numberOfAwards: 264
                        },
                        {
                            calendarYear: "2009",
                            numberOfAwards: 120
                        }
                    ],
                    awardDollarFlow: {
                        today: 0,
                        thisWeek: 92565556,
                        thisMonth: 147271678.66,
                        thisQuarter: 973476236.45,
                        thisYear: 2705624613.58,
                        allTime: 2705624613.58,
                        2014-04-month: 826204557.79,
                        2014-03-month: 591048125.82,
                        2014-02-month: 740140353.41,
                        2014-01-month: 400959897.9,
                        2013-12-month: 608394394.6,
                        2013-11-month: 278858994.6,
                        2013-10-month: 1749685748.69,
                        2013-09-month: 1488065812.62,
                        2013-08-month: 1229801844.72,
                        2013-07-month: 1075492374.89,
                        2013-06-month: 1024336976.17,
                        2013-05-month: 744993985.35,
                        2013-04-month: 307183237.02,
                        2013-03-month: 117233136.92,
                        2013-02-month: 739290426.83,
                        2013-01-month: 394136098.91,
                        2012-12-month: 702958664.8,
                        2012-11-month: 1283217124.08,
                        2012-10-month: 1484018189.25,
                        2012-09-month: 3236651661.93,
                        2012-08-month: 720741760.44,
                        2012-07-month: 1040115311.5,
                        2012-06-month: 1317349299.72,
                        2012-05-month: 762539162.88
                    }
                },
                protestStats: {
                totalProtests: "None Listed",
                protestsWithdrawn: "None Listed",
                protestsDenied: "None Listed",
                protestsSustained: "None Listed",
                protestsDismissed: "None Listed"
                },
                timestamp: "2014-05-18T13:59:00-0400",
                type: "category",
                _id: "518ecbf0db40a51b0b000067"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string",
                        "description": "The unique ID for the Category"
                    },
                    "description" : {
                        "type" : "string",
                        "description" : "A description of the category. This is so meta."
                    },
                    "mappedNAICS" : {
                        "type" : "array",
                        "minLength" : 0,
                        "uniqueItems": true,
                        "description": "The North American Industry Classification Codes that map to this category",
                        "items" : {
                            "type" : "string",
                            "description" : "A  North American Industry Classification Code"
                        }
                    },
                    "mappedClassCodes" : {
                        "type" : "array",
                        "minLength" : 0,
                        "uniqueItems": true,
                        "description" : "The Products and Services Class (PSC) Codes mapped to this category",
                        "items" : {
                            "type" : "string",
                            "description" : "A PSC Code"
                        }
                    },
                    "parentCategories" : {
                        "type" : "array",
                        "description" : "An array for of one or more parent categories that contain this category.",
                        "uniqueItems" : true,
                        "minLength" : 0,
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for the parent catgory of this category",
                            "properties": {
                                "name": {
                                    "type" : "string",
                                    "description" : "The name of the entity"
                                },
                                "type": {
                                    "type" : "string",
                                    "description" : "The type of the entity - namely category"
                                },
                                "_id": {
                                    "type" : "string",
                                    "description" : "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "childCategories" : {
                        "type" : "array",
                        "description" : "An array for of one or more children categories for which this category is the parent.",
                        "uniqueItems" : true,
                        "minLength" : 0,
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a child catgory of this category",
                            "properties": {
                                "name": {
                                    "type" : "string",
                                    "description" : "The name of the entity"
                                },
                                "type": {
                                    "type" : "string",
                                    "description" : "The type of the entity - namely category"
                                },
                                "_id": {
                                    "type" : "string",
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time an event occurred for projects within this category",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of a project"
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity"
                    },
                    "procurementStats" : {
                        "type" : "object",
                        "description" : "Statistics about the office's public procurements, broken down by year. Updated daily.",
                        "properties" : {
                            "averageTimesToAward" : {
                                "type" : "array",
                                "description" : "A list of the average number of days for the office's Projects to move from Open for Bid to Award or Canceled for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "The average number of days for the office's Projects to move from Open for Bid to Award or Canceled for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageTimeToAward" : {
                                            "type" : "number",
                                            "description" : "The number of days"
                                        }
                                    }
                                }
                            },
                            "averageAwardValues" : {
                                "type" : "array",
                                "description" : "A list of the average award values for an office's projects for each year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Average award value for an office's projects for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "averageAwardValue" : {
                                            "type" : "number",
                                            "description" : "The average award value"
                                        }
                                    }
                                }
                            },
                            "numbersOfAwards" : {
                                "type" : "array",
                                "description" : "A list of the numbers of awards for an office, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of awards for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfAwards" : {
                                            "type" : "number",
                                            "description" : "The number of awards. Does not differentiate with respect to competitive nature of process."
                                        }
                                    }
                                }
                            },
                            "awardDollarFlow" : {
                                "type"  "array",
                                "description" : "The total award values for an entity, grouped by time buckets, going back two years.",
                                "items" : {
                                    "type" : "object",
                                    "description" : "A time bucket of total award value",
                                    "properties" : " {
                                        "timeBucket" : {
                                            "type" : "string",
                                            "description" : "A human readable time bucket"
                                        },
                                        "total" : {
                                            "type" : "string",
                                            "description" : "The total amount awarded for a time bucket. 
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "organizationalStats" : {
                        "type" : "object",
                        "description" : "Statistics about the category, including active people and office counts. Updated daily.",
                        "properties" : {
                            "activePeople" : {
                                "type" : "array",
                                "description" : "A list of the numbers of active people for  a category, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of active people for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfActivePeople" : {
                                            "type" : "number",
                                            "description" : "The number of active people."
                                        }
                                    }
                                }
                            },
                            "activeOffices" : {
                                "type" : "array",
                                "description" : "A list of the numbers of active offices for a category, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of active offices for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfActiveOffices" : {
                                            "type" : "number",
                                            "description" : "The number of active offices."
                                        }
                                    }
                                }
                            },
                            "activeAgencies" : {
                                "type" : "array",
                                "description" : "A list of the numbers of active agencies for a category, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "Number of active agencies for a given year.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "numberOfActiveAgencies" : {
                                            "type" : "number",
                                            "description" : "The number of active agencies."
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "obligationStats" : {
                        "type" : "array",
                        "minLength" : 0,
                        "description" : "The obligations for a category, broken down by year and agency.",
                        "items" : {
                            "type" : "object",
                            "description" : "Total obligations for a given year, broken down by top 5 agencies",
                            "properties" : {
                                 "totalObligations" : {
                                    "type" : "number",
                                    "description" : "The total amount of obligations within a category for a given year"
                                },
                                "calendarYear" : {
                                    "type" : "string",
                                    "description" : "A calendar year"
                                },
                                "agenciesBreakdown" : {
                                    "type" : "array",
                                    "minLength" : 0,
                                    "maxLength" : 6,
                                    "description" : "The percentage of a category's total obligations for that year, split by agency. Top 5 listed. Remainder listed as All Other Agencies",
                                    "items" : {
                                        "type" : "object",
                                        "description" : "A percentage of the category's obligations for a specific agency",
                                        "properties"  : {
                                            "agencyName" : {
                                                "type" : "string",
                                                "description" : "The name of the agency. Will only be an actual agency for the top 5. Remainder noted as All Other Agencies"
                                            },
                                            "percentage" : {
                                                "type" : "number",
                                                "description" : "The percentage of a categories' total obligations for this agency"
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "govTribeStats" : {
                        "type" : "object",
                        "description" : "Proprietary GovTribe stats about a category",
                        "properties" : {
                        }
                    }
                }
            }
    

### Retrieve a Single Category [GET]
+ Request Category
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Category][]

## Search Categories [/category/search/{?q}]
Find a category by its name.

+ Parameters

    + q (required, string `Mining`) ... The string with which we will query the categories

    
+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
        
            { 
                results: [
                    {
                        name: "Mining: Oil and Gas",
                        type: "category",
                        _id: "518ecbf0db40a51b0b000071"
                    },
                    {
                        name: "Mining: Coal and Mineral",
                        type: "category",
                        _id: "518ecbf0db40a51b0b000072"
                    },
                    {
                        name: "Construction, mining, excavating and highway maintenance equipment",
                        type: "category",
                        _id: "518ecbf0db40a51b0b000029"
                    }
                ],
                pagination: {
                    total: 3,
                    count: 3,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 1,
                    links: [ ]
                }
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of results available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"]
                        },
                        "required": ["pagination", "results"]     
                    }
                }
            }


### Retrieve Vendor Search Results [GET]


+ Request Search Vendors
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search Categories][]
    
    
## Category Slices [/category/{_id}/slice/sliceName]
Returns a listing (slice) of NTIs that are related to a category based on the slice name. For example, the `agenciesThatAwardProjectsInThisCategory` slice will return a list of agency NTIs that award projects within this category.


+ Parameters

    + _id (required, string, `518ecbf0db40a51b0b000029`) ... id of the desired category
    + sliceName (required, string, `agenciesThatAwardProjectsInThisCategory`) ... A list of entities or slice, relative to the category. 
    
        + Values
            + `agenciesThatAwardProjectsInThisCategory`
            + `officesThatAwardProjectsInThisCategory`
            + `peopleThatAwardProjectsInThisCategory`
            + `vendorsThatWinProjectsInThisCategory`


### Retrieve a Slice for a Category [GET]

+ Request Slice
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Entity Collection][]

# Group Activity

## Activity [/activity/{_id}]

The Activity collection provides objects representing the ongoing activity of one or more of the other entity types. It is a time series of the world of government procurement.

A single Activity object contains actors, targets, and actions. For example, if a CO within the Bureau of Prisons awards a Mining Project named 23--Mining Contract to Acme Consulting, an Activity object is created with the actions that occurred as well as references to the involved entities.

In this example, the actors are:

* An Agency - The Department of Justice
* An Office - The Bureau of Prisons
* A Person - The CO
* A Category - Mining

In this example, the targets are:

* A Project - the 23--Mining Project
* A Vendor - Acme Consulting

In this example, the actions are:

* Awarded = true


+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... string `id` of the desired Activity.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                "actions": [
                    {
                        "action": "updated",
                        "value": true
                    },
                    {
                        "action": "changedTheStatusTo",
                        "value": "Justification and Approval (J&A)"
                    },
                    {
                        "action": "addedFiles",
                        "value": 1
                    },
                    {
                        "action": "changedTheWorkflowStatusTo",
                        "value": "Awarded"
                    },
                    {
                        "action": "removedAContact",
                        "value": [
                            "Richard Ferraiolo"
                        ]
                    }
                ],
                "activityType": "project",
                "actors": [
                    {
                        "name": "Department of the Navy",
                        "type": "agency",
                        "_id": "51548151db40a5165c0000d1"
                    },
                    {
                        "name": "Naval Supply Systems Command",
                        "type": "office",
                        "_id": "51c1d4dddb40a5298c79c740"
                    },
                    {
                        "name": "NAVSUP Weapon Systems Support Philadelphia PA",
                        "type": "office",
                        "_id": "51c1d4e8db40a5298c79c75c"
                    },
                    {
                        "name": "Manufacturing: Computer, Electronics, Appliances",
                        "type": "category",
                        "_id": "518ecbf0db40a51b0b00009c"
                    },
                    {
                        "name": "Communication, detection, and radiation equipment",
                        "type": "category",
                        "_id": "518ecbf0db40a51b0b000034"
                    }
                ],
                "name": "Update",
                "targets": [
                    {
                        "name": "Receiver Transmitter",
                        "type": "project",
                        "_id": "52a092fde3dd9054348b4567"
                    }
                ],
                "timestamp": "2014-05-20T11:05:00-0400",
                "type": "activity",
                "_id": "537b92226c5cc8fb188b4567"
            }

    + Schema

            {
                "type": "object",
                "properties" : {
                    "actors" : {
                        "type" : "array",
                        "minLength" : 1,
                        "uniqueItems" : true,
                        "description" : "An array of NTIs for the entities that are acting for this activity message",
                        "items": {
                            "type" : "object",
                            "title" : "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties" : {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type" : {
                                    "type":"string",
                                    "enum": ["project", "agency", "office", "person", "vendor", "category"],
                                    "description": "The type of the entity"
                                },
                                "_id" : {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "actions" : {
                        "type" : "array",
                        "description" : "An array of action objects and resulting values",
                        "items" : {
                            "type" : "object",
                            "properties" :
                            {
                                "action" : {
                                    "type" : "string",
                                    "description" : "The action that occurred",
                                    "enum" : ["added", "addedAContact", "addedADecision", "addedADueDate", "addedANewSolicitationNumber", "addedASetAsideType", "addedASolicitationNumber", "addedASynopsis", "addedAwardValue", "addedFiles", "awarded", "awardedTo", "changedTheDueDate", "changedTheSetAsideType", "changedTheSynopsis", "changedTheWorkflowStatusTo", "issuedMultipleAwards", "named", "removedAContact", "removedTheDueDate", "removedTheSetAsideType", "renamed", "setTheProtestedProjectTo", "setTheProtestingPartyTo", "setTheWorkflowStatusTo", "updated"]    
                                },
                                "value" : {
                                    "type" : ["string", "boolean", "number"],
                                    "description" : "The value associated with the action."
                                }
                            }
                            
                        }
                    }, 
                    "targets" : {
                        "type" : "array",
                        "minLength" : 1,
                        "uniqueItems" : true,
                        "description" : "An array of NTIs for the entities that are being acted upon for this activity message",
                        "items": {
                            "type" : "object",
                            "title" : "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties" : {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type" : {
                                    "type":"string",
                                    "enum": ["project", "agency", "office", "person", "vendor", "category", "protest"],
                                    "description": "The type of the entity"
                                },
                                "_id" : {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date this activity occurred",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of the activity object.",
                        "enum" : ["forecast", "posting", "update", "cancelation", "award", "protest", "obligation", "r
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the object. Namely activity"
                    }
                }
            }
    

### Retrieve a Single Activity [GET]
+ Request Activity
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Activity][]

## Activity Feed [/activity/feed/{ids,since}]
Retrieving multiple activity objects for one or more entities produces an activity feed. This is accomplished by submitting an array of `_id` properties to the `feed` endpoint along with a optional since timestamp value. 

For example, let's say you are interested in seeing a year's worth of contracting activity for the U.S. Department of Agriculture. For this example, you would submit the `_id` property of the USDA agency entity and a since of now-31556926 to the `feed` endpoint. 

You can combine multiple `_id` properties in the submitted array to get an integrated activity feed for multiple entities. 

For example, let's say you are interested in seeing the contracting activity for 3 different person entities. For this example, you will submit the three `_id` strings (in an array) to the `feed` endpoint.

+ Parameters

    + ids (string, `51548151db40a5165c0000d1,51c1d4dddb40a5298c79c740`) ... one or more comma separated `id` strings for the desired entities.
    + since  (optional, number, `1399822866`) ... the distance back in time for a particular call as seconds. Default is one year 

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                "results": [
                    {
                        "actions": [
                            {
                                "action": "updated",
                                "value": true
                            },
                            {
                                "action": "changedTheStatusTo",
                                "value": "Award Notice"
                            },
                            {
                                "action": "removedTheDueDate",
                                "value": true
                            },
                            {
                                "action": "awarded",
                                "value": true
                            },
                            {
                                "action": "addedAwardValue",
                                "value": "$50,817.06"
                            },
                            {
                                "action": "changedTheWorkflowStatusTo",
                                "value": "Awarded"
                            },
                            {
                                "action": "awardedTo",
                                "value": [
                                    "Mac Business Solutions Inc."
                                ]
                            }
                        ],
                        "activityType": "project",
                        "actors": [
                            {
                                "name": "Department of Health and Human Services",
                                "type": "agency",
                                "_id": "51548150db40a5165c0000c6"
                            },
                            {
                                "name": "Food and Drug Administration",
                                "type": "office",
                                "_id": "51c1d621ca985fad34000076"
                            },
                            {
                                "name": "Office of Acquisitions and Grants Services",
                                "type": "office",
                                "_id": "51c1d621ca985fad34000077"
                            },
                            {
                                "name": "General purpose information technology equipment",
                                "type": "category",
                                "_id": "518ecbf0db40a51b0b00003c"
                            }
                        ],
                        "name": "Update",
                        "targets": [
                            {
                                "name": "Apple Mac Pros",
                                "type": "project",
                                "_id": "5373cae66c5cc89e1b8b4567"
                            },
                            {
                                "name": "Mac Business Solutions Inc.",
                                "type": "vendor",
                                "_id": "51e0671eca985fd31705c1e1"
                            }
                        ],
                        "timestamp": "2014-05-20T11:09:00-0400",
                        "type": "activity",
                        "_id": "537b97ed6c5cc8fc258b4567"
                    },
                    {
                        "actions": [
                            {
                                "action": "added",
                                "value": true
                            },
                            {
                                "action": "named",
                                "value": "Maintenance Agreement for a Tecan Infinite F500 Microplate Reader"
                            },
                            {
                                "action": "setTheStatusTo",
                                "value": "Sources Sought"
                            },
                            {
                                "action": "addedADueDate",
                                "value": "2014-05-27T14:00:00-0400"
                            },
                            {
                                "action": "addedASolicitationNumber",
                                "value": "FDA_14-223-SOL-1134480"
                            },
                            {
                                "action": "addedFiles",
                                "value": 1
                            },
                            {
                                "action": "setTheWorkflowStatusTo",
                                "value": "Presolicitation"
                            },
                            {
                                "action": "addedAContact",
                                "value": [
                                    "Yolanda T. Peer"
                                ]
                            }
                        ],
                        "activityType": "project",
                        "actors": [
                            {
                                "name": "Department of Health and Human Services",
                                "type": "agency",
                                "_id": "51548150db40a5165c0000c6"
                            },
                            {
                                "name": "Food and Drug Administration",
                                "type": "office",
                                "_id": "51c1d621ca985fad34000076"
                            },
                            {
                                "name": "Office of Acquisitions and Grants Services",
                                "type": "office",
                                "_id": "51c1d621ca985fad34000077"
                            },
                            {
                                "name": "Yolanda T. Peer",
                                "type": "person",
                                "_id": "51c2832dca985ff1380000d7"
                            },
                            {
                                "name": "Electronic Equipment Repair and Maintenance",
                                "type": "category",
                                "_id": "518ecbf0db40a51b0b000109"
                            },
                            {
                                "name": "Maintenance, repair and rebuilding of equipment",
                                "type": "category",
                                "_id": "518ecbf0db40a51b0b00005a"
                            }
                        ],
                        "name": "Posting",
                        "targets": [
                            {
                                "name": "Maintenance Agreement for a Tecan Infinite F500 Microplate Reader",
                                "type": "project",
                                "_id": "537b98166c5cc89c268b4567"
                            }
                        ],
                        "timestamp": "2014-05-20T11:00:00-0400",
                        "type": "activity",
                        "_id": "537b98166c5cc89c268b4568"
                    },
                ],
                "pagination": {
                    "total": 7658,
                    "count": 50,
                    "perPage": 50,
                    "currentPage": 1,
                    "totalPages": 154,
                    "links": {
                        "next": "http://api.govtribe.com/activity/feed?page=2&ids=51548150db40a5165c0000c6%2C51c1d621ca985fad34000077&timestampRange=1369051836"
                    }
                }
            }
            
   + Schema
   
            {
                "type" : "object",
                "description" : "An activity feed for one or more entities. Paginated and sorted by activity timestamp.",
                "properties" : {
                    "results" : {
                        "type": "array",
                        "uniqueItems" : true,
                        "description" : "The activity objects for submitted set of entity IDs",
                        "minLength" : 0,
                        "maxLength" : 50,
                        "items" : {
                            "type": "object",
                            "properties" : {
                                "actors" : {
                                    "type" : "array",
                                    "minLength" : 1,
                                    "uniqueItems" : true,
                                    "description" : "An array of NTIs for the entities that are acting for this activity message",
                                    "items": {
                                        "type" : "object",
                                        "title" : "NTI",
                                        "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                                        "properties" : {
                                            "name": {
                                                "type":"string",
                                                "description": "The name of the entity"
                                            },
                                            "type" : {
                                                "type":"string",
                                                "enum": ["project", "agency", "office", "person", "vendor", "category"],
                                                "description": "The type of the entity"
                                            },
                                            "_id" : {
                                                "type":"string",
                                                "description": "The unique ID for the entity"
                                            }
                                        }
                                    }
                                },
                                "actions" : {
                                    "type" : "array",
                                    "description" : "An array of action objects and resulting values",
                                    "items" : {
                                        "type" : "object",
                                        "properties" :
                                        {
                                            "action" : {
                                                "type" : "string",
                                                "description" : "The action that occurred",
                                                "enum" : ["added", "addedAContact", "addedADecision", "addedADueDate", "addedANewSolicitationNumber", "addedASetAsideType", "addedASolicitationNumber", "addedASynopsis", "addedAwardValue", "addedFiles", "awarded", "awardedTo", "changedTheDueDate", "changedTheSetAsideType", "changedTheSynopsis", "changedTheWorkflowStatusTo", "issuedMultipleAwards", "named", "removedAContact", "removedTheDueDate", "removedTheSetAsideType", "renamed", "setTheProtestedProjectTo", "setTheProtestingPartyTo", "setTheWorkflowStatusTo", "updated"]    
                                            },
                                            "value" : {
                                                "type" : ["string", "boolean", "number"],
                                                "description" : "The value associated with the action."
                                            }
                                        }
                                        
                                    }
                                }, 
                                "targets" : {
                                    "type" : "array",
                                    "minLength" : 1,
                                    "uniqueItems" : true,
                                    "description" : "An array of NTIs for the entities that are being acted upon for this activity message",
                                    "items": {
                                        "type" : "object",
                                        "title" : "NTI",
                                        "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                                        "properties" : {
                                            "name": {
                                                "type":"string",
                                                "description": "The name of the entity"
                                            },
                                            "type" : {
                                                "type":"string",
                                                "enum": ["project", "agency", "office", "person", "vendor", "category", "protest"],
                                                "description": "The type of the entity"
                                            },
                                            "_id" : {
                                                "type":"string",
                                                "description": "The unique ID for the entity"
                                            }
                                        }
                                    }
                                },
                                "timestamp" : {
                                    "type" : "string",
                                    "description" : "The date this activity occurred",
                                    "format" : "date-time"
                                },
                                "name" : {
                                    "type" : "string",
                                    "description" : "The Name of the activity object.",
                                    "enum" : ["forecast", "posting", "update", "cancelation", "award", "protest", "obligation", "recompete", "announcement"]
                                },
                                "type" : {
                                    "type" : "string",
                                    "description" : "The type of the object. Namely activity"
                                }
                            }
                        }
                    }
                }
            }    


### Retrieve an Activity Feed [GET]

+ Request Activity
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Activity Feed][]



# Group Protest

## Protest [/protest/{_id}]
The laws and regulations that govern contracting with the federal government are designed to ensure that federal procurements are conducted fairly and, whenever possible, in a way that maximizes competition. On occasion, however, bidders or others interested in government procurements may have reason to believe that a contract has been or is about to be awarded improperly or illegally, or that they have been unfairly denied a contract or an opportunity to compete for a contract. 

A major avenue of relief for those concerned about the propriety of an award has been the General Accounting Office, which for almost 75 years has provided an objective, independent, and impartial forum for the resolution of disputes concerning the awards of federal contracts.

Each of these disputes is a protest object.

+ Parameters
    + _id (required, string, `5359397fdb40a5238000621e`) ... String `id` of the desired protest entity.

+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
    
            {
                agencies: [
                    {
                        name: "Department of the Air Force",
                        type: "agency",
                        _id: "51548151db40a5165c0000ce"
                    }
                ],
                decision: "Not Available",
                decisionURI: "http://www.gao.gov/docket/B-409297.1",
                name: "CACI International Inc. vs. Department of the Air Force",
                offices: "None Listed",
                people: [
                    {
                        name: "Paula J. Haurilesko",
                        type: "person",
                        _id: "5202dd79db40a59c28938516"
                    }
                ],
                projects: [
                    {
                        name: "Air Force Central (AFCENT) is seeking sponsorship for a Firefighter Challenge in Kuwait.",
                        type: "project",
                        _id: "51f73802ca985f502f000123"
                    }
                ],
                protesters: [
                    {
                        name: "CACI International Inc.",
                        type: "vendor",
                        _id: "51ed4c84ca985f3b0900000b"
                    }
                ],
                status: "Dismissed",
                timestamp: "2013-11-25T16:59:46-0500",
                type: "protest",
                _id: "5359397fdb40a5238000621e"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string",
                        "description": "The unique ID for the protest"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time the protest was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of a protest. Constructed as entity v entity"
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "enum" : ["protest"]
                    },
                    },
                    "status" : {
                        "type" : "string",
                        "description" : "The status of the protest",
                        "enum" : ["Withdrawn", "Denied", "Sustained", "Dismissed"]
                    },
                    "decisionURI" : {
                        "type" : "string",
                        "description" : "Link to the decision on GAO's website",
                        "items" : {
                            "type" : "string",
                            "description" : "A link to the decision",
                            "format" : "uri"
                        }
                    },
                    "decision" : {
                        "type" : "string",
                        "description" : "Text of the decision",
                        "items" : {
                            "type" : "string",
                            "description" : "Text of the decision",
                        }
                    },
                   "agencies" : {
                        "type" : "array"
                        "description" : "The NTIs for all agencies related to this person",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a n agency",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the agency"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["agency"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "offices" : {
                        "type" : "array"
                        "description" : "The NTIs for all offices related to this person",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for an office",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the office"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["office"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "people" : {
                        "type" : "array"
                        "description" : "The NTIs for people related to the protest. Typically GAO attorneys.",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a person",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the person"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "protesters" : {
                        "type" : "array"
                        "description" : "The NTIs for all protesters related to this protest",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for an entity",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["agency", "vendor"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    }
                }
            }
    

### Retrieve a Single Protest [GET]
+ Request Vendor
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Protest][]

## Search Protests [/protest/search/{?q}]
Find a protest by...

+ Parameters

    + q (required, string `Challenge`) ... The string with which we will query the protests
    
+ Model

    + Headers

            Content-Type: application/json
            X-GT-Rate-Limit: 1000
            X-GT-Rate-Limit-Remaining: 999
            X-GT-API-Version: 3.0
            X-GT-Response-Time: 0.181 sec

    + Body
        
            {
                results: [
                    {
                        name: "CACI International Inc. vs. Department of the Air Force",
                        type: "protest",
                        _id: "5359397fdb40a5238000621e"
                    },
                    {
                        name: "Kingdomware Technologies vs. Millennium Challenge Corporation",
                        type: "protest",
                        _id: "53593771db40a523800056e9"
                    },
                    {
                        name: "Focused Management Inc. vs. Millennium Challenge Corporation",
                        type: "protest",
                        _id: "5359374ddb40a52380005621"
                    }
                ],
                pagination: {
                    total: 3,
                    count: 3,
                    perPage: 50,
                    currentPage: 1,
                    totalPages: 1,
                    links: [ ]
                }
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "pagination" : {
                        "type" : "object",
                        "description" : "Information about paging through the returned results.",
                        "properties" : {
                            "total" : {
                                "type" : "number",
                                "description" : "The total number of results available"
                            },
                            "count" : {
                                "type" : "number",
                                "description" : "The total number returned on this page"
                            },
                            "perPage" : {
                                "type" : "number",
                                "description" : "The total number returned per page"
                            },
                            "currentPage" : {
                                "type" : "number",
                                "description" : "The page number you are currently on"
                            },
                            "totalPages" : {
                                "type" : "number",
                                "description" : "The total number of pages available"
                            },
                            "links" { 
                                "type" : "object",
                                "properties" : {
                                    "previous" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the previous page"
                                    },
                                    "next" : {
                                        "type" : "string",
                                        "format" : "uri",
                                        "description" : "A uri for the next page"
                                    }
                                }
                            }
                        }
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 50,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "description" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"]
                        },
                        "required": ["pagination", "results"]     
                    }
                }
            }


### Retrieve Protest Search Results [GET]


+ Request Search Protests
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search Protests][]
