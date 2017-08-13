# Dribbble API for PHP
[![Latest Stable Version](https://poser.pugx.org/axp-dev/dribbble-api/v/stable)](https://packagist.org/packages/axp-dev/dribbble-api)
[![Latest Unstable Version](https://poser.pugx.org/axp-dev/dribbble-api/v/unstable)](https://packagist.org/packages/axp-dev/dribbble-api)
[![License](https://poser.pugx.org/axp-dev/dribbble-api/license)](https://packagist.org/packages/axp-dev/dribbble-api)

Simple php library for [dribbble api](https://dribbble.com)

## Contents
1. [Start](#start)
    + [Composer](#composer)
    + [Initialization](#initialization)
2. [Usage](#usage)
    + Buckets
        + [Get a bucket](#get-a-bucket)
        + [List shots for a bucket](#list-shots-for-a-bucket)
    + Projects
        + [Get a project](#get-a-project)
        + [List shots for a project](#list-shots-for-a-project)
    + Shots
        + [Get a shot](#get-a-shot)
        + [List shots](#list-shots)
        + [List attachments for a shot](#list-attachments-for-a-shot)
        + [List buckets for a shot](#list-buckets-for-a-shot)
        + [List comments for a shot](#list-comments-for-a-shot)
        + [List the likes for a shot](#list-the-likes-for-a-shot)
        + [List projects for a shot](#list-projects-for-a-shot)
        + [List rebounds for a shot](#list-rebounds-for-a-shot)
    + Teams
        + [List a teams members](#list-a-teams-members)
        + [List shots for a team](#list-shots-for-a-team)
    + Users
        + [Get a single user](#get-a-single-user)
        + [List a users buckets](#list-a-users-buckets)
        + [List followers of a user](#list-followers-of-a-user)
        + [List users followed by a user](#list-users-followed-by-a-user)
        + [List shot likes for a user](#list-shot-likes-for-a-user)
        + [List a users projects](#list-a-users-projects)
        + [List shots for a user](#list-shots-for-a-user)
        + [List a users teams](#list-a-users-teams)
    + Jobs
        + [Show a job](#show-a-job)
3. [Author](#author)
4. [License](#license)

## Start
### Composer
```
$ composer require axp-dev/dribbble-api
```

### Initialization
```php
$token  = '...';
$client = new DribbbleApi($token);
```

## Usage
### Get a bucket
```php
public function getBuckets($id) : array
```

### List shots for a bucket
```php
public function getBucketsShots($id) : array
```

### Get a project
```php
public function getProjects($id) : array
```

### List shots for a project
```php
public function getProjectsShots($id) : array
```

### Get a shot
```php
public function getProjectsShots($id) : array
```

### List shots
```php
public function getShots($params = []) : array
```

### List attachments for a shot
```php
public function getShotsAttachments($id) : array
```

### List buckets for a shot
```php
public function getShotsBuckets($id) : array
```

### List comments for a shot
```php
public function getShotsComments($id) : array
```

### List the likes for a shot
```php
public function getShotsLikes($id) : array
```

### List projects for a shot
```php
public function getShotsProjects($id) : array
```

### List rebounds for a shot
```php
public function getShotsRebounds($id) : array
```

### List a teams members
```php
public function getTeamsMembers($id) : array
```

### List shots for a team
```php
public function getTeamsShots($id) : array
```

### Get a single user
```php
public function getUsers($id) : array
```

### List a users buckets
```php
public function getUsersBuckets($id) : array
```

### List followers of a user
```php
public function getUsersFollowers($id) : array
```

### List users followed by a user
```php
public function getUsersFollowing($id) : array
```

### List shot likes for a user
```php
public function getUsersLikes($id) : array
```

### List a users projects
```php
public function getUsersProjects($id) : array
```

### List shots for a user
```php
public function getUsersShots($id) : array
```

### List a users teams
```php
public function getUsersTeams($id) : array
```

### Show a job
```php
public function getJobs($id) : array
```

## Author
[Alexander Pushkarev](https://github.com/axp-dev), e-mail: [axp-dev@yandex.com](mailto:axp-dev@yandex.com)

## License
Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)