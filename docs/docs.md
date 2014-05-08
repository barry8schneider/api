FORMAT: 1A
HOST: http://api.govtribe.com

# GT API Beta
The [GovTribe](http://www.govtribe.com) API provides data on the U.S federal government contracting market. 

## Primary Entites
Created with data from multiple open government data sources, the GovTribe API presents six primary types of entities as well as their relationships to each other. Each entity type is a resource and has an endpoint.

* Project - A U.S. federal government contract or opportunity
* Agency - A U.S. federal government agency that executes Projects
* Office - An organizational unit within an Agency that executes Projects
* Person - A point of contact for one or more Projects
* Vendor - A legal entity that has been awareded a Project
* Category - A topical grouping, based off North American Industry Classification System (NAICS) codes or Product and Service (PSC) codes 

## Secondary Entities
The GovTribe API presents two types of secondary entities. Each supporting entity is a resource and has an endpoint. 

* Protest - Define Protest
* Activity - Define Activity

## Services
The GovTribe API provides a search service for accessing all primary entity types. 

# Group Primary Entities

## Primary Entity Collection [/{entityType}/{?skip,take}]
Collection of one of the six types of primary entities, returned as a paginated list of NTIs (name, type, ID), ordered by timestamp.

+ Model

    + Body
    
            {
            "total": 670413,
            "skip": 0,
            "take": 2,
            "results":[
                {
                    "name":"USDA EVENT - Rural Small Business Connections - Pine Bluff, AR",
                    "type":"project",
                    "_id":"5363be766c5cc8a60d8b4567"
                },
                {
                    "name":"SOLE SOURCE ENGINEERING TECHNICAL SERVICES TO SUPPORT THE IMPROVED CONTROL AND DISPLAY UPGRADE TO THE SLQ-32 COUNTERMEASURE SYSTEM",
                    "type":"project",
                    "_id":"5363be2b6c5cc8a00c8b4567"
                }
            ]
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "total": {
                        "type": "integer",
                        "description": "The total number of entities for this endpoint"                        
                    },
                    "skip": {
                        "type": "integer",
                        "description": "The number of entities skipped in the response",
                        "default": 0
                    },
                    "take": {
                        "type": "integer",
                        "description": "The number of entities returned in the response",
                        "default": 25
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
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
                                    "enum": ["project", "agency", "office", "person", "vendor", "category"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            },
                            "required":["name", "type", "_id"],
                        }
                        "required": ["total", "skip", "take", "results"]     
                    }
                }
            }

### List Primary Entities [GET]

+ Parameters
    
    + entityType (required, string `project`) ... The type of entitiies to be returned
        + Values
            + `project`
            + `vendor`
            + `category`
            + `agency`
            + `office`
            + `person`
    + skip = `0` (optional, number) ... The number of entities to skip.
    + take = `25` (optional, number) ... The number of entities to return.

+ Request Project
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Primary Entity Collection][]
    


# Group Project

## Project [/project/{_id}]
A Project is a U.S. federal government contract or opportunity. 

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Project entity to perform action with.

+ Model

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string"
                        "description": "The unique ID for the Project"
                    },
                    "NAICS" : {
                        "type":"string"
                        "description": "The North American Industry Classification Code assigned to the Project"
                    },
                    
                    "setAsideType" : {
                        "type":"string"
                        "description": "The set aside designated for a project"
                        "enum" : ["Total Small Business", "Service-Disabled Veteran-Owned Small Business", "HUBZone", "Competitive 8(a)", "Woman Owned Small Business", "Partial Small Business", "Economically Disadvantaged Woman Owned Small Business", "Emerging Small Business", "Total HBCU / MI", "Partial HBCU / MI"]
                    },
                    "dueDates": {
                        "type" : "array",
                        "description" : "All due dates for a project across its lifecycle",
                        "items" : { 
                            "type" : "object"
                            "description" : "A specific due date for project",
                            "properties" : {
                                "dueDateType" : {
                                    "type" : "string",
                                    "description" : "The type of event or workflow status for a due date",
                                    "enum" : ["Presolicitation Response", "Complete Response"]
                                },
                                "date" : {
                                    "type" : "string",
                                    "description" : "The date value for a specific due date",
                                    "format" : "date-time"
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
                        "type" : "array"
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
                                    "type":"string"
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
                    "POPs": {
                        "type" : "array",
                        "description" : "Geocoded places of performance for a project",
                        "items" : {
                            "type" : "object",
                            "description" : "A geocoded place of performance for a project",
                            "properties" : {
                                "name" : {
                                    "type" : "string",
                                    "description" : "The name of a place of performance"
                                },
                                "type" : {
                                    "type" : "string",
                                    "description" :  "The type of the geocoded place of performance"
                                }, 
                                "coordinates" : {
                                    "type" : "array"
                                    "items" : {
                                        "type" : "number",
                                        "description" : "The lat and long for a given coordinate"
                                    }
                                },
                                "coordinateType" : {
                                    "type" : "string",
                                    "description" : "The type of the coordinate",
                                    "enum" : ["Point"]
                                }
                            }
                        }
                    },
                    "sourceLinks" : {
                        "type" : "array"
                        "description" : "Listing of source data providers for this project",
                        "items" : {
                            "type" : "string",
                            "description" : "A source link string",
                            "format" : "uri"
                        }
                    },
                    "awardedVendors" : {
                        "type" : "array"
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
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "predictedCompetition" : {
                        "type" : "array"
                        "description" : "The NTIs for all vendors predicted by GovTribe to compete for this project.",
                        "items" : {
                            "type" : "object",
                            "description" : "An NTI for a vendor, as well as likliehood of winning",
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
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The likliehood a vendor will win this project"
                                    "enum" : ["High", "Moderate", "Low"]
                                }
                            }
                        }
                    },
                    "solicitationNumbers" : {
                        "type" : "array",
                        "description" : "A listing of all solicitation numbers for a specific project"
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
                                "packageData" : {
                                    "type" : "array",
                                    "desscription" : "A listing of file data for a package",
                                    "items" : {
                                        "type" : "object",
                                        "description" : "Data for a specifc file or attachment",
                                        "properties" : {
                                            "fileURI" : {
                                                "type" : "string",
                                                "description" : "URI for a specific file",
                                            },
                                            "fileName" : {
                                                "type"  "string"
                                                "description" : "The name of the file"
                                            },
                                            "fileDescription" : {
                                                "type"  "string"
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
                        "type" : "array"
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
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "contractNumbers" : {
                        "type" : "array",
                        "description" : "A listing of all contract numbers for a specific project"
                        "items" : {
                            "type" : "string",
                            "description" : "A contract number"
                        }
                    },
                    "categories" : {
                        "type" : "array"
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
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of a project"
                    },
                    "synopsis" : {
                        "type" : "array",
                        "description" : "All of the synopses for a project across its lifecycle, provided in reverse order of occurance",
                        "items: {
                            "type" : "string",
                            "description" : "A synopsis"
                        }
                    },
                    "offices" : {
                        "type" : "array"
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
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                }
                            }
                        }
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "enum" : ["project]
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
   

## Project Award Data [/project/{_id}/awardData]

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Project entity to perform action with.

+ Model

    + Body
            
            {
                "hello" : "There"
                "my" : "property"
            }

    + Schema
    
            {
                "type" : "object",
                "description" : "Information related to the award of this project",
                "properties": {
                    "totalAwardValue" {
                        "type" : "number",
                        "description" : "The total amount of dollars awarded across all base and option years"
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
                                "description" : "The total amount across all awards of the base period",
                            }
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
                                    "type" : "string"
                                    "description" : "The name of the option period".
                                },
                                "optionNumber" : {
                                    "type" : "number"
                                    "description" : "The number, in sequential order of the option period".
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
                                    "description" : "The total amount across all awards the option period",
                                }
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

### Retrieve Project Award Data [GET]

Returns the award data for a given project

+ Request Project Award Data
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Project Award Data][]
    
        
## Project Obligation Data [/project/{_id}/obligationData]

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Project entity to perform action with.

+ Model

    + Body
            
            {
                "hello" : "There"
                "my" : "property"
            }

    + Schema
    
            {
                "type" : "object",
                "description" : "Information related to the award of this project",
                "properties": {
                    "totalObligationsToDate" : {
                        "type" : "number",
                        "description" : "The total amount oblgated to the project.",
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
                                            "type":"string"
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
            }

### Retrieve Project Obligation Data [GET]

Returns the obligation data for a given project

+ Request Project Award Data
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Project Obligation Data][]
    
        


## Search Projects [/project/{?searchString,skip,take}]

+ Parameters

    + searchString (required, string `Green Laser`) ... The string with which we will query the projects
    + skip = `0` (optional, number) ... The number of entities to skip.
    + take = `25` (optional, number) ... The number of entities to return.
    
+ Model

    + Body
        
            {
                "Hello" : "You Fool"
            }

    + Schema
    
            {
                "type": "object",
                "properties": {
                    "total": {
                        "type": "integer",
                        "description": "The total number of returned entities for this search"                        
                    },
                    "skip": {
                        "type": "integer",
                        "description": "The number of entities skipped in the response",
                        "default": 0
                    },
                    "take": {
                        "type": "integer",
                        "description": "The number of entities returned in the response",
                        "default": 25
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "items": {
                            "type": "object",
                            "title": "NTI",
                            "desription" : "The name, type, and ID of an entity. Commonly referred to as an NTI",
                            "properties": {
                                "name": {
                                    "type":"string",
                                    "description": "The name of the entity"
                                },
                                "type": {
                                    "type":"string",
                                    "enum": ["project", "agency", "office", "person", "vendor", "category"],
                                    "description": "The type of the entity"
                                },
                                "_id": {
                                    "type":"string"
                                    "description": "The unique ID for the entity"
                                },
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                }
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", "highlighted", "score"],
                        }
                        "required": ["total", "skip", "take", "results"]     
                    }
                }
            }


### Search Projects [GET]

Search all projects by keyword

+ Request Search Projects
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Search Projects][]

## Filtered Projects [/project/{?skip,take,setAsideType,workflowStatus,agency,office,person,vendor,category}]

### Projects with Specific Attributes [GET]

Returns a paginated list of projects, ordered by their timestamp property.

+ Parameters
    
    + setAsideType (optional, string) ... The set aside type for the Project
        
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
            + `Presolicitation`
            + `Open For Bid`
            + `Awarded`
            + `Canceled`
            + `Underway`
            + `Ended`

    + agency = `` (optional, string, `51548151db40a5165c0000d4`) ... The _id for a specific Agency 
    + office = `` (optional, string) ... The _id for a specific Office
    + person = `` (optional, string) ... The _id for a specific Person
    + vendor = `` (optional, string) ... The _id for a specific vendor
    + category = `` (optional, string) ... The _id for a specific category
    + skip = `0` (optional, number) ... The number of entities to skip.
    + take = `25` (optional, number) ... The number of entities to return.

+ Request Project
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Primary Entity Collection][]
    


# Group Agency

## Agency [/agency/{_id}]
An Agency is a U.S. government agency 

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Agency entity.

+ Model

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
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
                        "enum" : ["agency"]
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
                                        "averageTimeToAward" : {
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
                                            "description" : "The number of awards. Does not differntiate with respect to competitive nature of process."
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "organizationalStats" : {
                        "type" : "object",
                        "description" : "Statistics about the organization, inlcuding active people and office counts. Updated daily.",
                        "properties" : {
                            "activePeopleInTheLastYear" : {
                                "type" : "number",
                                "description" : " The number of people working for this agency who have been active in the past 12 calendar months."
                            },
                            "activeOfficesInTheLastYear" : {
                                "type" : "number",
                                "description" : " The number of offices this agency that have been active in the past 12 calendar months."
                            }
                        }
                    }, 
                    "obligationStats" : {
                    
                    },
                    "protestStats" : {
                    
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
   


# Group Office

## Office [/office/{_id}]
An Office is a sub unit of a U.S. government agency 

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Office entity.

+ Model

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string"
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
                        "description" : "The type of the entity",
                        "enum" : ["office"]
                    }
                }
            }
    

### Retrieve a Single Office [GET]
+ Request Office
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200
    
   [Office][]

# Group Person

## Person [/person/{_id}]
An Person is a U.S. government point of contact for one or more projects 

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Person entity.

+ Model

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string"
                        "description": "The unique ID for the person"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time a person was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of the person
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "enum" : ["person"]
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

# Group Vendor

## Vendor [/vendor/{_id}]
An Vendor is a business entity that has won a Project 

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Vendor entity.

+ Model

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string"
                        "description": "The unique ID for the vendor"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time a vendor was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of the vendor"
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "enum" : ["vendor"]
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

# Group Category

## Category [/category/{_id}]
A Category is a topical grouping based on NAICS codes and PSC codes 

+ Parameters
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired category entity.

+ Model

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
            }

    + Schema

            {
                "type": "object",
                "properties": {
                    "_id" : {
                        "type":"string"
                        "description": "The unique ID for the category"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time a category was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of the category"
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the entity",
                        "enum" : ["category"]
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

