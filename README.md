# Dribbble API for PHP
[![Latest Stable Version](https://poser.pugx.org/axp-dev/dribbble-api/v/stable)](https://packagist.org/packages/axp-dev/dribbble-api)
[![Latest Unstable Version](https://poser.pugx.org/axp-dev/dribbble-api/v/unstable)](https://packagist.org/packages/axp-dev/dribbble-api)
[![License](https://poser.pugx.org/axp-dev/dribbble-api/license)](https://packagist.org/packages/axp-dev/dribbble-api)

Simple php library for [dribbble](https://dribbble.com) api v2.

## Contents
1. [Installation](#installation)
2. [Initialization](#initialization)
3. [Usage](#usage)
   + Attachments
     + [Create an attachment](#create-an-attachment)
     + [Delete an attachment](#delete-an-attachment)
   + Projects
     + [List projects](#list-projects)
     + [Create a project](#create-a-project)
     + [Update a project](#update-a-project)
     + [Delete a project](#delete-a-project)
   + Shots
      + [List shots](#list-shots)
      + [Get a shot](#get-a-shot)
      + [Create a shot](#create-a-shot)
      + [Update a shot](#update-a-shot)
      + [Delete a shot](#delete-a-shot)
   + User
      + [Get the authenticated user](#get-the-authenticated-user)
   + Jobs
      + [Create a job](#create-a-job)
      + [Update a job](#update-a-job)
      + [Show a job](#show-a-job)
4. [Author](#author)
5. [License](#license)

## Installation
You can install this library by using composer
```bash
$ composer require axp-dev/dribbble-api
```

## Initialization
```php
$authToken = getenv('DRIBBBLE_AUTH_TOKEN');

$dribbble = AXP\DribbbleApi\DribbbleApi::builder()
    ->setAuthToken($authToken)
    ->build();

$response = $dribbble->getProjectsList();
```

## Usage
### Attachments
#### Create an attachment
```php
public function createAttachment(int $shotId, mixed $file): HeaderResponse
public function createAttachmentPromise(int $shotId, mixed $file): PromiseInterface
```
#### Delete an attachment
```php
public function deleteAttachment(int $shotId, int $attachmentId): HeaderResponse
public function deleteAttachmentPromise(int $shotId, int $attachmentId): PromiseInterface
```

### Projects
#### List projects
```php
public function getProjectsList(): ProjectsListResponse
public function getProjectsListPromise(): PromiseInterface
```
#### Create a project
```php
public function createProject(array $params): ProjectResponse
public function createProjectPromise(array $params): PromiseInterface
```
#### Update a project
```php
public function updateProject(int $projectId, array $params): ProjectResponse
public function updateProjectPromise(int $projectId, array $params): PromiseInterface
```
#### Delete a project
```php
public function deleteProject(int $projectId): ProjectResponse
public function deleteProjectPromise(int $projectId): PromiseInterface
```

### Shots
#### List shots
```php
public function getShotsList(): ShortsListResponse
public function getShotsListPromise(): PromiseInterface
```
#### Get a shot
```php
public function getShot(int $shotId): ShortResponse
public function getShotPromise(int $shotId): PromiseInterface
```
#### Create a shot
```php
public function createShot(array $params): ShortResponse
public function createShotPromise(array $params): PromiseInterface
```
#### Update a shot
```php
public function updateShot(int $shotId, array $params): ShortResponse
public function updateShotPromise(int $shotId, array $params): PromiseInterface
```
#### Delete a shot
```php
public function deleteShot(int $shotId): HeaderResponse
public function deleteShotPromise(int $shotId): PromiseInterface
```
### User
#### Get the authenticated user
```php
public function getUser(): UserResponse
public function getUserPromise(): PromiseInterface
```

### Jobs
#### Create a job
```php
public function createJob(array $params): JobResponse
public function createJobPromise(array $params): PromiseInterface
```
#### Update a job
```php
public function updateJob(int $jobId, array $params): JobResponse
public function updateJobPromise(int $jobId, array $params): PromiseInterface
```
#### Show a job
```php
public function getJob(int $jobId): JobResponse
public function getJobPromise(int $jobId): PromiseInterface
```

## Author
[Alexander Pushkarev](https://github.com/axp-dev), e-mail: [axp-dev@yandex.com](mailto:axp-dev@yandex.com)

## License
Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)