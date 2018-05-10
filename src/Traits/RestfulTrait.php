<?php namespace NigelHeap\TeamworkDesk\Traits;

trait RestfulTrait {

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->get($this->endpoint)->response();
    }

    /**
     * @return mixed
     */
    public function find()
    {
        return $this->client->get("$this->endpoint/$this->id")->response()[$this->wrapper];
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->client->post("$this->endpoint", $data)->response();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function update(array $data)
    {
        return $this->client->put("$this->endpoint/$this->id", $data)->response();
    }

    /**
     * @return mixed
     */
    public function delete()
    {
        return $this->client->delete("$this->endpoint/$this->id")->response();
    }


}