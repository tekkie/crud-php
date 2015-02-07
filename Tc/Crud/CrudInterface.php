<?php

namespace Tc\Crud;

/**
 * Describes a data accessor API.
 */
interface CrudInterface
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
     * Remove existing items, by criteria
     *
     * @param array $criteria
     * @param array $options
     */
    public function deleteMultiple(array $criteria = array(), array $options = array());
    
    /**
     * Insert new or update existing item, if one exists
     *
     * @param object $item     Model to insert/update
     * @param array  $criteria Used for search
     * @param array  $isoDates Allows adding extra fields (key => value), stored as ISO dates in mongo
     */
    public function upsert($item = null, array $criteria = array(), array $isoDates = array());

    /**
     * Count number of documents in collection
     *
     * @param array $criteria
     *
     * @return int
     */
    public function count(array $criteria = array());

    /**
     * Retrieve a list of distinct values of the given key from collection
     *
     * @param string $key
     * @param array  $criteria
     *
     * @return array
     */
    public function distinct($key, array $criteria = array());

}
