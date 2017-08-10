# Dribbble API for PHP
Simple php library for [dribbble api](https://dribbble.com)

## Contents
1. [Start](#start)
    + [Composer](#composer)
    + [Initialization](#initialization)
2. [Usage](#usage)
    + [Get a bucket](#get-a-bucket)
    + [List shots for a bucket](#list-shots-for-a-bucket)
    + [Get a project](#get-a-project)
    + [List shots for a project](#list-shots-for-a-project)
    + [Get a shot](#get-a-shot)
    + [List shots](#list-shots)
    + [List attachments for a shot](#list-attachments-for-a-shot)
    + [List buckets for a shot](#list-buckets-for-a-shot)
    + [List comments for a shot](#list-comments-for-a-shot)
    + [List the likes for a shot](#list-the-likes-for-a-shot)
    + [List projects for a shot](#list-projects-for-a-shot)
    + [List rebounds for a shot](#list-rebounds-for-a-shot)
    + [List a teams members](#list-a-teams-members)
    + [List shots for a team](#list-shots-for-a-team)
    + [Get a single user](#get-a-single-user)
    + [List a users buckets](#list-a-users-buckets)
    + [List followers of a user](#list-followers-of-a-user)
    + [List users followed by a user](#list-users-followed-by-a-user)
    + [List shot likes for a user](#list-shot-likes-for-a-user)
    + [List a users projects](#list-a-users-projects)
    + [List shots for a user](#list-shots-for-a-user)
    + [List a users teams](#list-a-users-teams)
    + [Show a job](#show-a-job)
3. [Author](#author)
4. [License](#license)

## Start
### Composer
TODO: Add package to repository

### Initialization
```php
$token  = '...';
$client = new DribbbleApi($token);
```

## Usage
### Get a bucket
```php
public function getBuckets($id)
```

### List shots for a bucket
```php
public function getBucketsShots($id)
```

### Get a project
```php
public function getProjects($id)
```

### List shots for a project
```php
public function getProjectsShots($id)
```

### Get a shot
```php
public function getProjectsShots($id)
```

### List shots
```php
public function getShots($params = [])
```

### List attachments for a shot
```php
public function getShotsAttachments($id)
```

### List buckets for a shot
```php
public function getShotsBuckets($id)
```

### List comments for a shot
```php
public function getShotsComments($id)
```

### List the likes for a shot
```php
public function getShotsLikes($id)
```

### List projects for a shot
```php
public function getShotsProjects($id)
```

### List rebounds for a shot
```php
public function getShotsRebounds($id)
```

### List a teams members
```php
public function getTeamsMembers($id)
```

### List shots for a team
```php
public function getTeamsShots($id)
```

### Get a single user
```php
public function getUsers($id)
```

### List a users buckets
```php
public function getUsersBuckets($id)
```

### List followers of a user
```php
public function getUsersFollowers($id)
```

### List users followed by a user
```php
public function getUsersFollowing($id)
```

### List shot likes for a user
```php
public function getUsersLikes($id)
```

### List a users projects
```php
public function getUsersProjects($id)
```

### List shots for a user
```php
public function getUsersShots($id)
```

### List a users teams
```php
public function getUsersTeams($id)
```

### Show a job
```php
public function getJobs($id)
```

## Author
[Alexander Pushkarev](https://github.com/axp-dev), e-mail: [axp-dev@yandex.com](mailto:axp-dev@yandex.com)

## License
Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)