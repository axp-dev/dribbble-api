<?php
namespace AXP\DribbleApi;

use AXP\DribbbleApi\Exceptions\DribbbleApiException;

/**
 * Dribbble API for PHP.
 *
 * @author   Alexander Pushkarev <axp-dev@yandex.com>
 * @link     https://github.com/axp-dev/Dibbble-API
 * @license  MIT License
 */
class DribbbleApi {
    /**
     * Api url
     *
     * @var string
     */
    protected $endpoint = 'https://api.dribbble.com/v1';

    /**
     * Access token
     *
     * @var string
     */
    protected $access_token;

    /**
     * DribbbleApi constructor.
     * @param $token
     */
    function __construct($token) {
        $this->access_token = $token;
    }

    /**
     * Get a bucket
     * @link http://developer.dribbble.com/v1/buckets/
     *
     * @param $id
     * @return mixed
     */
    public function getBuckets($id) {
        return $this->query(sprintf('/buckets/%d', $id));
    }

    /**
     * List shots for a bucket
     * @link http://developer.dribbble.com/v1/buckets/shots/
     *
     * @param $id
     * @return mixed
     */
    public function getBucketsShots($id) {
        return $this->query(sprintf('/buckets/%d/shots', $id));
    }

    /**
     * Get a project
     * @link http://developer.dribbble.com/v1/projects/
     *
     * @param $id
     * @return mixed
     */
    public function getProjects($id) {
        return $this->query(sprintf('/projects/%d', $id));
    }

    /**
     * List shots for a project
     * @link http://developer.dribbble.com/v1/projects/shots/
     *
     * @param $id
     * @return mixed
     */
    public function getProjectsShots($id) {
        return $this->query(sprintf('/projects/%d/shots', $id));
    }

    /**
     * Get a shot
     * @link http://developer.dribbble.com/v1/shots/#get-a-shot
     *
     * @param $id
     * @return mixed
     */
    public function getShot($id) {
        return $this->query(sprintf('/shots/%d', $id));
    }

    /**
     * List shots
     * @link http://developer.dribbble.com/v1/shots/
     *
     * @param array $params
     * @return mixed
     */
    public function getShots($params = []) {
        return $this->query('/shots/', $params);
    }

    /**
     * List attachments for a shot
     * @link http://developer.dribbble.com/v1/shots/attachments/
     *
     * @param $id
     * @return mixed
     */
    public function getShotsAttachments($id) {
        return $this->query(sprintf('/shots/%d/attachments', $id));
    }

    /**
     * List buckets for a shot
     * @link http://developer.dribbble.com/v1/shots/buckets/
     *
     * @param $id
     * @return mixed
     */
    public function getShotsBuckets($id) {
        return $this->query(sprintf('/shots/%d/buckets', $id));
    }

    /**
     * List comments for a shot
     * @link http://developer.dribbble.com/v1/shots/comments/
     *
     * @param $id
     * @return mixed
     */
    public function getShotsComments($id) {
        return $this->query(sprintf('/shots/%d/comments', $id));
    }

    /**
     * List the likes for a shot
     * @link http://developer.dribbble.com/v1/shots/likes/
     *
     * @param $id
     * @return mixed
     */
    public function getShotsLikes($id) {
        return $this->query(sprintf('/shots/%d/likes', $id));
    }

    /**
     * List projects for a shot
     * @link http://developer.dribbble.com/v1/shots/projects/
     *
     * @param $id
     * @return mixed
     */
    public function getShotsProjects($id) {
        return $this->query(sprintf('/shots/%d/projects', $id));
    }

    /**
     * List rebounds for a shot
     * @link http://developer.dribbble.com/v1/shots/rebounds/
     *
     * @param $id
     * @return mixed
     */
    public function getShotsRebounds($id) {
        return $this->query(sprintf('/shots/%d/rebounds', $id));
    }

    /**
     * List a team’s members
     * @link http://developer.dribbble.com/v1/teams/members/
     *
     * @param $id
     * @return mixed
     */
    public function getTeamsMembers($id) {
        return $this->query(sprintf('/teams/%d/members', $id));
    }

    /**
     * List shots for a team
     * @link http://developer.dribbble.com/v1/teams/shots/
     *
     * @param $id
     * @return mixed
     */
    public function getTeamsShots($id) {
        return $this->query(sprintf('/teams/%d/shots', $id));
    }

    /**
     * Get a single user
     * @link http://developer.dribbble.com/v1/users/
     *
     * @param $id
     * @return mixed
     */
    public function getUsers($id) {
        return $this->query(sprintf('/users/%d', $id));
    }

    /**
     * List a user’s buckets
     * @link http://developer.dribbble.com/v1/users/buckets/
     *
     * @param $id
     * @return mixed
     */
    public function getUsersBuckets($id) {
        return $this->query(sprintf('/users/%d/buckets', $id));
    }

    /**
     * List followers of a user
     * @link http://developer.dribbble.com/v1/users/followers/
     *
     * @param $id
     * @return mixed
     */
    public function getUsersFollowers($id) {
        return $this->query(sprintf('/users/%d/followers', $id));
    }

    /**
     * List users followed by a user
     * @link http://developer.dribbble.com/v1/users/followers/#list-users-followed-by-a-user
     *
     * @param $id
     * @return mixed
     */
    public function getUsersFollowing($id) {
        return $this->query(sprintf('/users/%d/following', $id));
    }

    /**
     * List shot likes for a user
     * @link http://developer.dribbble.com/v1/users/likes/
     *
     * @param $id
     * @return mixed
     */
    public function getUsersLikes($id) {
        return $this->query(sprintf('/users/%d/likes', $id));
    }

    /**
     * List a user’s projects
     * @link http://developer.dribbble.com/v1/users/projects/
     *
     * @param $id
     * @return mixed
     */
    public function getUsersProjects($id) {
        return $this->query(sprintf('/users/%d/projects', $id));
    }

    /**
     * List shots for a user
     * @link http://developer.dribbble.com/v1/users/shots/
     *
     * @param $id
     * @return mixed
     */
    public function getUsersShots($id) {
        return $this->query(sprintf('/users/%d/shots', $id));
    }

    /**
     * List a user’s teams
     * @link http://developer.dribbble.com/v1/users/teams/
     *
     * @param $id
     * @return mixed
     */
    public function getUsersTeams($id) {
        return $this->query(sprintf('/users/%d/teams', $id));
    }

    /**
     * Show a job
     * @link http://developer.dribbble.com/v1/jobs/
     *
     * @param $id
     * @return mixed
     */
    public function getJobs($id) {
        return $this->query(sprintf('/jobs/%d', $id));
    }

    /**
     * HTTP request
     *
     * @param $url
     * @param array $params
     * @param string $method
     * @return mixed
     * @throws DribbbleApiException
     */
    protected function query($url, $params = [], $method = 'GET') {
        $toUrl = $this->endpoint . $url . '?' . http_build_query(array_merge($params, ['access_token' => $this->access_token]), null, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $toUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $curl = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($curl === false) {
            throw new DribbbleApiException(curl_error($ch), curl_errno($ch));
        }

        $result = json_decode($curl, true);

        if (isset($result->message)) {
            throw new DribbbleApiException($result->message, $status);
        }

        return $result;
    }
}