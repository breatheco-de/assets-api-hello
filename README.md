# API Documentation

Here is should start documenting your API endpoints like:

## Endpoint Nr 1: Add students (example)

Allows clients to add new students into the system

```
POST /students

Request (application/json)
body:
{
    "first_name": "Bob"
}

Response (application/json):
{
    "id": 1,
    "first_name": "Bob"
}
```
