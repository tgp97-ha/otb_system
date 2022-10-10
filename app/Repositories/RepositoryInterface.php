<?php

namespace Emedia\Repositories;

interface RepositoryInterface{
	/**
	 * Get all
	 *
	 * @return mixed
	 */
	public function all();

	/**
	 * Get one
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public function find( $id );

	/**
	 * Create
	 *
	 * @param array $attributes
	 *
	 * @return mixed
	 */
	public function create( array $attributes );

	/**
	 * Update
	 *
	 * @param array $code
	 * @param array $attributes
	 *
	 * @return mixed
	 */
	public function update( array $code, array $attributes );

	/**
	 * Delete
	 *
	 * @param array $code
	 *
	 * @return mixed
	 */
	public function delete( array $code );

	/**
	 * Select
	 *
	 * @param $select
	 *
	 * @return mixed
	 */
	public function select( $select );
}
