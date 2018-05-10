<?php  namespace NigelHeap\TeamworkDesk;

use NigelHeap\TeamworkDesk\Traits\RestfulTrait;

class Users extends AbstractObject {

    use RestfulTrait;

    protected $wrapper  = 'user';

    protected $endpoint = 'users';


    /**
     * GET /me.json
     */
    public function me()
    {
        return $this->client->get("me")->response();
    }

    /**
     * A list of the available user roles for this installation, based on the plan chosen
     *
     * GET /users/roles.json
     */
    public function getAvailableRoles()
    {
        return $this->client->get("{$this->endpoint}/roles")->response();
    }

    /**
     * Get All API Keys
     * GET /users/{user_id}/apikeys.json
     *
     * @return mixed
     */
    public function apiKeys()
    {
        return $this->client->get("$this->endpoint/$this->id/apikeys")->response();
    }

}