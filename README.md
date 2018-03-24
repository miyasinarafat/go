# go
My personal URL-Shortener based on Lumen

### Installation

To install ***go*** simply type the following commands in your terminal

```
git clone https://github.com/fwartner/go.git
cd go
cp .env.example .env
composer install
php artisan migrate
```

### Endpoints

#### `GET` /links

**

#### Request:

+ Headers:
    No specific headers needed.

+ Url Params:
    No specific query parameters needed.

+ Body:
```
base_url=https%3A%2F%2Fflorianwartner.me%2Fblog12dd
```

***


#### Response:

+ Status: **200**

+ Body:
```
{
    "links": [
        {
            "id": 1,
            "base_url": "https://florianwartner.me",
            "new_url": "http://go.testxfZbx",
            "created_at": "2018-03-24 14:00:22",
            "updated_at": "2018-03-24 14:00:22"
        },
        {
            "id": 3,
            "base_url": "https://florianwartner.me/blog",
            "new_url": "http://go.testQCrjN",
            "created_at": "2018-03-24 14:00:43",
            "updated_at": "2018-03-24 14:00:43"
        },
        {
            "id": 4,
            "base_url": "https://florianwartner.me/blog1",
            "new_url": "http://go.test/oyaZV",
            "created_at": "2018-03-24 14:06:49",
            "updated_at": "2018-03-24 14:06:49"
        },
        {
            "id": 5,
            "base_url": "https://florianwartner.me/blog12",
            "new_url": "http://go.test/r/Abb32",
            "created_at": "2018-03-24 14:16:04",
            "updated_at": "2018-03-24 14:16:04"
        },
        {
            "id": 6,
            "base_url": "https://florianwartner.me/blog12dd",
            "new_url": "JRpn7",
            "created_at": "2018-03-24 14:18:05",
            "updated_at": "2018-03-24 14:18:05"
        }
    ]
}
```

#### `POST` /links

**

#### Request:

+ Headers:
    No specific headers needed.

+ Url Params:
    No specific query parameters needed.

+ Body:
```
base_url=https%3A%2F%2Fgithub.com%2Ffwartner%2Fgo
```

***


#### Response:

+ Status: **201**

+ Body:
```
{
    "base_url": "https://github.com/fwartner/go",
    "new_url": "http://go.test/r/dFaEW"
}
```
***



