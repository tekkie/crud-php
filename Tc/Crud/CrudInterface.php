<?php

namespace Tc\Crud;

/**
 * Describes a data accessor API.
 */
interface CrudInterface

{
    
    /**
     * Create new item
     */
    public function create($item = null);
    
    /**
     * Retrieve existing item
     *
     * @return object|null
     */
    public function read();
    
    /**
     * Changes existing item
     */
    public function update();
    
    /**
     * Remove existing item
     */
    public function delete();
    
    /**
     * Insert new or update existing item, if one exists
     */
    public function upsert($item = null);
    
}
