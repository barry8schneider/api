FORMAT: 1A
HOST: http://api.govtribe.com

# GT API Beta
The [GovTribe](http://www.govtribe.com) API provides data on the U.S. federal government contracting market. 

## Entites
Created with data from multiple open government data sources, the GovTribe API presents eight types of entities as well as their relationships to each other. Each entity type is a resource and has an endpoint.

* Project - A U.S. federal government contract or opportunity
* Agency - A U.S. federal government agency that executes Projects
* Office - An organizational unit within an Agency that executes Projects
* Person - A point of contact for one or more Projects
* Vendor - A legal entity that has been awarded a Project
* Category - A topical grouping, based off North American Industry Classification System (NAICS) codes or Product and Service (PSC) codes
* Protest - The laws and regulations that govern contracting with the federal government are designed to ensure that federal procurements are conducted fairly and, whenever possible, in a way that maximizes competition. On occasion, however, bidders or others interested in government procurements may have reason to believe that a contract has been or is about to be awarded improperly or illegally, or that they have been unfairly denied a contract or an opportunity to compete for a contract. This is a protest.
* Activity - The Activity collection provides objects representing the ongoing activity of one or more of the other entity types. It is a time series of the world of government procurement.

# Entities

## Entity Collection [/{entityType}/{?skip,take}]
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
    + skip = `0` (optional, number) ... The number of entities to skip.
    + take = `25` (optional, number) ... The number of entities to return.

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
                        "description": "The total number of entities for this endpoint",
                        "minimum" : 0
                    },
                    "skip": {
                        "type": "integer",
                        "description": "The number of entities skipped in the response",
                        "default": 0,
                        "maximum" : 250,
                        "minimum" : 0
                    },
                    "take": {
                        "type": "integer",
                        "description": "The number of entities returned in the response",
                        "default": 25,
                        "maximum" : 250,
                        "minimum" : 0
                    },
                    "results": {
                        "type": "array",
                        "uniqueItems": true,
                        "minItems" : 0,
                        "maxItems" : 250,
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

### List Entities [GET]


+ Request Entities
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Entity Collection][]
    


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
                        "type":"string",
                        "description": "The unique ID for the Project"
                    },
                    "NAICS" : {
                        "type":"string",
                        "description": "The North American Industry Classification Code assigned to the Project"
                    },
                    "setAsideType" : {
                        "type":"string",
                        "description": "The set aside designated for a project",
                        "enum" : ["Total Small Business", "Service-Disabled Veteran-Owned Small Business", "HUBZone", "Competitive 8(a)", "Woman Owned Small Business", "Partial Small Business", "Economically Disadvantaged Woman Owned Small Business", "Emerging Small Business", "Total HBCU / MI", "Partial HBCU / MI"]
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
                                    "enum" : ["Forecast", "Presolicitation Posting", "Presolicitation Due", "Solicitation Posting", "Solicitation Due", "Award", "contractEnd", "Base Period End", "Option Period End"]
                                },
                                "date" : {
                                    "type" : "string",
                                    "description" : "The value for a specific date",
                                    "format" : "date-time"
                                },
                                "valueSource" : {
                                    "type" : "string",
                                    "description" : "An indication of whether the date value is derived from mining source data or predcited by GovTribe",
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
                        "description" : "The raw string mined for a place of performance"
                    },
                    "geoCodedPlacesOfPerformance": {
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
                                    "type":"string",
                                    "description": "The unique ID for the entity"
                                },
                                "_id": {
                                    "type":"string",
                                    "description": "The likliehood a vendor will win this project",
                                    "enum" : ["High", "Moderate", "Low"]
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
                                "packageData" : {
                                    "type" : "array",
                                    "description" : "A listing of file data for a package",
                                    "items" : {
                                        "type" : "object",
                                        "description" : "Data for a specifc file or attachment",
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
                    "synopsis" : {
                        "type" : "array",
                        "description" : "All of the synopses for a project across its lifecycle, provided in reverse order of occurance",
                        "items" : {
                            "type" : "string",
                            "description" : "A synopsis"
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
                        "enum" : ["project"]
                    },
                    "contractType" : {
                        "type" : "string",
                        "description" : "The contract type for this project.",
                        "enum" : ["Not Available", "Firm Fixed Price", "etc", "etc2"]
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
Returns the award data for a given project.

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
                    "totalAwardValue" : {
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

### Retrieve A Single Project Award Data [GET]

+ Request Project Award Data
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Project Award Data][]
    
        
## Project Obligation Data [/project/{_id}/obligationData]
Returns the obligation data for a given project.

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
            }

### Retrieve A Single Project Obligation Data [GET]

+ Request Project Award Data
    
    + Headers

            Accept: application/json
            X-GT-API-Key: yourAPIKey

+ Response 200

    [Project Obligation Data][]
    
        


## Search Projects [/project/search/{?searchString,skip,take}]
Search Projects by keyword or phrase. GovTribe indexes project names, synopsese, files, and extracted tags for a project.

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
                        "minItems" : 0,
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
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", "highlighted", "score"]
                        },
                        "required": ["total", "skip", "take", "results"]     
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

## Filtered Projects [/project/{?skip,take,setAsideType,workflowStatus,agency,office,person,vendor,category}]
Returns a paginated list of filtered projects, ordered by their timestamp property.

### Retrieve Projects with Specific Attributes [GET]


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
            + `Forecasted`
            + `Presolicitation`
            + `Open For Bid`
            + `Awarded`
            + `Canceled`
            + `Active`
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

    [Entity Collection][]
    


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
                        "description" : "Statistics about the organization, inlcuding active people and office counts. Updated daily.",
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
                    "Stats" : {
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
                            "purseStringIndicies" : {
                                "type" : "array",
                                "description" : "A list of the purse string indices for an agency, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "The purse string index is computed by combining the frequency, speed, and magnitude of awards for an agency.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "purseStringIndex" : {
                                            "type" : "number",
                                            "description" : "The purse string index for a given year."
                                        }
                                    }
                                }
                            }
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
Returns a listing (slice) of NTIs that are related to an agency based on the slice name. For example, the `vendorsThatWinTotalSmallBusinessSetAsideProjects` slice will return a list of vendor NTIs for a given agency that have won projects desginated as a Total Small Business set aside.


+ Parameters

    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... id of the desired Agency Entity
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


## Search Agencies [/agency/search/{?searchString,skip,take}]
Find Agencies by their name or acronym

+ Parameters

    + searchString (required, string `USDA`) ... The string with which we will query the agencies
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
                        "minItems" : 0,
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
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", "highlighted", "score"]
                        },
                        "required": ["total", "skip", "take", "results"]     
                    }
                }
            }


### Retireve Agency Search Results [GET]

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
                        "description" : "The type of the entity",
                        "enum" : ["agency"]
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
                                            "description" : "The number of awards. Does not differntiate with respect to competitive nature of process."
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
                        "description" : "Statistics about the office, inlcuding active people. Updated daily.",
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
                            "purseStringIndicies" : {
                                "type" : "array",
                                "description" : "A list of the purse string indices for an office, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "The purse string index is computed by combining the frequency, speed, and magnitude of awards for an office.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "purseStringIndex" : {
                                            "type" : "number",
                                            "description" : "The purse string index for a given year."
                                        }
                                    }
                                }
                            }
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
    
   [Agency][]
   

## Office Slices [/office/{_id}/{slice}]
Returns a listing (slice) of NTIs that are related to an office based on the slice name. For example, the `vvendorsThatWinTotalSmallBusinessSetAsideProjects` slice will return a list of vendor NTIs for a given agency that have won projects desginated as a Total Small Business set aside.


+ Parameters

    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... id of the desired Office Entity
    + slice (required, string, `vendorsThatWinTotalSmallBusinessSetAsideProjects`) ... A list of entities or slice, relative to the office. 
    
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


## Search Offices [/office/search/{?searchString,skip,take}]
Find an office by its name or acronym.

+ Parameters

    + searchString (required, string `Bureau of Prisons`) ... The string with which we will query the offices
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
                        "minItems" : 0,
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
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", "highlighted", "score"]
                        },
                        "required": ["total", "skip", "take", "results"]     
                    }
                }
            }


### Retireve Office Search Results [GET]

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
                                            "description" : "The number of awards. Does not differntiate with respect to competitive nature of process."
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
                    "protestStats" : {
                        "type" : "object",
                        "description" : "Protest stats for the projects of a person, including breakdowns by protest status.",
                        "properties" : {
                            "totalProtests" : {
                                "type" : "array",
                                "description" : "A list of the numbers of total protests for a person, broken down by year.",
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
                            "purseStringIndicies" : {
                                "type" : "array",
                                "description" : "A list of the purse string indices for a person, broken down by year.",
                                "items" : {
                                    "type" : "object",
                                    "description" :  "The purse string index is computed by combining the frequency, speed, and magnitude of awards for a person.",
                                    "properties" : {
                                        "calendarYear" : {
                                            "type" : "string",
                                            "description" : "A calendar year"
                                        },
                                        "purseStringIndex" : {
                                            "type" : "number",
                                            "description" : "The purse string index for a given year."
                                        }
                                    }
                                }
                            }
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


## Person Slices [/person/{_id}/{slice}]
Returns a listing (slice) of NTIs that are related to an person based on the slice name. For example, the `vendorsThatWinTotalSmallBusinessSetAsideProjects` slice will return a list of vendor NTIs for a given person that have won projects desginated as a Total Small Business set aside.


+ Parameters

    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... id of the desired Office Entity
    + slice (required, string, `vendorsThatWinTotalSmallBusinessSetAsideProjects`) ... A list of entities or slice, relative to the office. 
    
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


## Search People [/person/search/{?searchString,skip,take}]
Find a person by their name, email, telephone number or position.

+ Parameters

    + searchString (required, string `James Smith`) ... The string with which we will query the people
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
                        "minItems" : 0,
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
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", "highlighted", "score"]
                        },
                        "required": ["total", "skip", "take", "results"]     
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
                    "setAsideDesignations" : {
                        "type" : "array",
                        "description" : "A listing of set aside designations for a vendor",
                        "minLength" : 0,
                        "uniqueItems" : true,
                        "items" : {
                            "type" : "string",
                            "description" : "A set aside designation for a vendor",
                            "enum" : ["type 1", "type 2"]
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
                    "tagsWon": {
                        "type" : "array",
                        "minLength" : 0,
                        "maxLength" : 25,
                        "uniqueItems": true,
                        "description" : "The topical tags for a projects this vendor has won, as well as its frequency",
                        "items" : {
                            "type" : "object",
                            "description" : "A tag or topic and frequency",
                            "properties" : {
                                "tag" : {
                                    "type" : "string",
                                    "description" : "A topical tag"
                                },
                                "count" : {
                                    "type" : "number",
                                    "description" : "The number of times that tag has appeared across all projects won by the vendor"
                                }
                            }
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
                            "totalAwards" : {
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
                                        "numberOfProtests" : {
                                            "type" : "number",
                                            "description" : "The number of awards."
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

## Search Vendors [/vendor/search/{?searchString,skip,take}]
Find a vendor by name.

+ Parameters

    + searchString (required, string `James Smith`) ... The string with which we will query the vendors
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
                        "minItems" : 0,
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
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", "highlighted", "score"]
                        },
                        "required": ["total", "skip", "take", "results"]     
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
    
    
## Vendor Slices [/vendor/{_id}/{slice}]
Returns a listing (slice) of NTIs that are related to a vendor based on the slice name. For example, the `agenciesThatAwardToThisVendor` slice will return a list of agency NTIs that have awarded projects to this vendor.


+ Parameters

    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... id of the desired vendor Entity
    + slice (required, string, `agenciesThatAwardToThisVendor`) ... A list of entities or slice, relative to the vendor. 
    
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
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired Category entity.

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
                        "description" : "Procurement stats for a category.",
                        "properties" : {
                            "totalAwards" : {
                                "type" : "array",
                                "minLength" : 0,
                                "description" : "A list of the numbers of total awards for a category, broken down by year.",
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
                                            "description" : "The number of awards."
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

## Search Categories [/category/search/{?searchString,skip,take}]
Find a category by its name, NAICS, PSC Code, or description.

+ Parameters

    + searchString (required, string `Mining`) ... The string with which we will query the categories
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
                        "minItems" : 0,
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
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required":["name", "type", "_id", "highlighted", "score"]
                        },
                        "required": ["total", "skip", "take", "results"]     
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
    
    
## Category Slices [/category/{_id}/{slice}]
Returns a listing (slice) of NTIs that are related to a category based on the slice name. For example, the `agenciesThatAwardProjectsInThisCategory` slice will return a list of agency NTIs that award projects within this catgeory.


+ Parameters

    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... id of the desired category
    + slice (required, string, `agenciesThatAwardProjectsInThisCategory`) ... A list of entities or slice, relative to the category. 
    
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

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
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
                        "description" : "An array of action ojects and resulting values",
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
                    "participants" : {
                        "type" : "array",
                        "minLength" : 1,
                        "uniqueItems" : true,
                        "description" : "An array of entity ids for both the actors and targets",
                        "items": {
                            "type" : "string",
                            "description" : "An id for an entity invloved in this activity message"
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
                        "description" : "The name of this activity.",
                        "enum" : ["Project Activity Message", "Protest Activity Message"]
                    },
                    "type" : {
                        "type" : "string",
                        "description" : "The type of the object. Namely activity"
                    },
                    "activityType" : {
                        "type" : "string",
                        "description" : "The type of the activity object.",
                        "enum" : ["forecast", "posting", "update", "cancelation", "award", "protest", "obligation", "recompete", "announcement"]
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

## Activity Feed [/activity/feed/{arrayOfEntityIDs,timestampRange}]
Retrieving multiple activity objects for one or more entities produces an activity feed. This is accomplished by submitting an array of `_id` properties to the `feed` endpoint along with a timestampRange. 

For example, let's say you are interested in seeing a year's worth of contracting activity for the U.S. Department of Agriculture. For this example, you would submit the `_id` property of the USDA agency entity and a timestampRange of now-31556926 to the `feed` endpoint. 

You can combine multiple `_id` properties in the submitted array to get an integrated activity feed for multiple entities. 

For example, let's say you are interested in seeing the contracting activity for 3 different person entities. For this exampe, you will submit the three `_id` strings (in an array) to the `feed` endpoint.

+ Parameters

    + arrayOfEntityIDs (array, `51f79dd2ca985f9b7c00031c`) ... one or more `id` strings for the desired entities. If this paramter is not provided, the activity feed for all entities will be returned.
    + timestampRange = `now-31556926` (optional, number, `1399822866`) ... the distance back in time for a particular call as a miliseconds since epoch.

+ Model

    + Body
    
            {
                "Hello" : "there",
                "You look" : "nice"
            }
            
   + Schema
   
            {
                "type" : "object",
                "description" : "An activity feed for one or more entities. Paginated and sorted by activity timestamp.",
                "properties" : {
                    "entityIDs" : {
                        "type": "array",
                        "uniqueItems" : true,
                        "description" : "entity IDs for the requested activity feed",
                        "minLength" : 0,
                        "maxLength" : 30,
                        "items" : {
                            "type" : "string",
                            "description" : "An entity id"
                        }    
                    },
                    "timestampRange" : {
                        "type" : "number",
                        "description" : "the distance back in time for a particular call as a miliseconds since epoch."
                    },
                    "results" : {
                        "type": "array",
                        "uniqueItems" : true,
                        "description" : "The activity objects for submitted set of entity IDs",
                        "minLength" : 0,
                        "maxLength" : 30,
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
                                    "description" : "An array of action ojects and resulting values",
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
                                "participants" : {
                                    "type" : "array",
                                    "minLength" : 1,
                                    "uniqueItems" : true,
                                    "description" : "An array of entity ids for both the actors and targets",
                                    "items": {
                                        "type" : "string",
                                        "description" : "An id for an entity involved in this activity message"
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
                                    "description" : "The name of this activity.",
                                    "enum" : ["Project Activity Message", "Protest Activity Message"]
                                },
                                "type" : {
                                    "type" : "string",
                                    "description" : "The type of the object. Namely activity"
                                },
                                "activityType" : {
                                    "type" : "string",
                                    "description" : "The type of the activity object.",
                                    "enum" : ["forecast", "posting", "update", "cancelation", "award", "protest", "obligation", "recompete", "announcement"]
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
    + _id (required, string, `51f79dd2ca985f9b7c00031c`) ... String `id` of the desired protest entity.

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
                        "description": "The unique ID for the protest"
                    },
                    "timestamp" : {
                        "type" : "string",
                        "description" : "The date for the last time the protest was active",
                        "format" : "date-time"
                    },
                    "name" : {
                        "type" : "string",
                        "description" : "The name of a protest"
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

## Search Protests [/protest/search/{?searchString,skip,take}]
Find a protest by...

+ Parameters

    + searchString (required, string `James Smith`) ... The string with which we will query the vendors
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
                        "minItems" : 0,
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
                                "highlighted" : {
                                    "type" : "string",
                                    "description" : "A snippet of text that matches the search query"
                                },
                                "score" : {
                                    "type" : "number",
                                    "description" : "The score for a particular result"
                                }
                            },
                            "required": ["name", "type", "_id", "highlighted", "score"]
                        },
                        "required": ["total", "skip", "take", "results"]     
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
    
    



