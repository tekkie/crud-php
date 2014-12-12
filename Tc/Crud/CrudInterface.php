<?php

namespace Tc\Crud;

/**
 * Describes a data accessor API.
 */
interface Crud
{
    
    /**
     * Create new item
     *
     * @param object $item
     * @param array  $criteria
     */
    public function create($item = null, array $criteria = array());
    
    /**
     * Retrieve existing item
     *
     * @param array $criteria
     * @param array $fields
     *
     * @return object|null
     */
    public function read(array $criteria = array(), $fields = array());
    
    /**
     * Changes existing item
     *
     * @param object $item
     * @param array  $criteria
     */
    public function update($item, array $criteria = array());
    
    /**
     * Remove existing item
     *
     * @param object $item
     */
    public function delete($item);
    
    /**
     * Insert new or update existing item, if one exists
     */
    public function upsert($item = null);
    
}
