<?php

namespace Emedia\Repositories;

/**
 *
 */
abstract class EloquentRepository implements RepositoryInterface{
	/**
	 * @var \Illuminate\Database\Eloquent\Model
	 */
	protected $_model;

	/**extends EloquentRepository
	 * EloquentRepository constructor.
	 */
	function __construct() {
		$this->setModel();
	}

	/**
	 * get model
	 *
	 * @return string
	 */
	abstract public function getModel(): string;

	/**
	 * Set model
	 *
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	function setModel() {
		$this->_model = app()->make( $this->getModel() );
	}

	/**
	 * Get All
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	function all() {
		return $this->_model->all();
	}

	/**
	 * @return mixed
	 */
	function count() {
		return $this->_model->count();
	}

	/**
	 * Get one
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	function find( $id ) {
		return $this->_model->find( $id );
	}

	/**
	 * Create
	 *
	 * @param array $attributes
	 *
	 * @return mixed
	 */
	function create( array $attributes ) {
		return $this->_model->create( $attributes );
	}

	/**
	 * @param array $conditions
	 * @param array|null $attributes
	 *
	 * @return mixed
	 */
	function updateOrCreate( array $conditions, array $attributes = null ) {
		return $this->_model->updateOrCreate( $conditions, $attributes );
	}

	/**
	 * Update
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return bool|mixed
	 */
	function update( $id, array $attributes ) {
		$result = $this->find( $id );
		if ( $result ) {
			$result->update( $attributes );

			return $result;
		}

		return false;
	}

	/**
	 * Delete
	 *
	 * @param integer $id
	 *
	 * @return bool
	 */
	function delete( $id ): bool {
		$result = $this->find( $id );
		if ( $result ) {
			$result->delete();

			return true;
		}

		return false;
	}

	/**
	 * @param array $condition
	 *
	 * @return mixed
	 */
	function where( array $condition ) {
		return $this->_model->where( $condition );
	}

	function whereLike( $column, $value ) {
		return $this->_model->where( $column, 'LIKE', $value );
	}

	function take( $number ) {
		return $this->_model->take( $number );
	}

	function with( $relation ) {
		return $this->_model->with( $relation );
	}

	function load( $relation ) {
		return $this->_model->load( $relation );
	}

	function whereHas( $relation ) {
		return $this->_model->whereHas( $relation );
	}

	function whereIn( $column, $data, $boolean = 'and', $not = false ) {
		return $this->_model->whereIn( $column, $data, $boolean, $not );
	}

	function orWhereIn( $column, $data ) {
		return $this->_model->orWhereIn( $column, $data );
	}

	function select( $select ) {
		return $this->_model->select( $select );
	}

	function firstOrNew( $data ) {
		$record = $this->_model->where( $data )->get();
		if ( $record ) {
			return $record;
		}

		return $this->_model->create( $data );
	}

	/**
	 * @param array $condition
	 *
	 * @return mixed
	 */
	function firstOrFail( array $condition ) {
		return $this->_model->where( $condition )->firstOrFail();
	}

	function withTrashed() {
		return $this->_model->withTrashed();
	}

	function orderBy( $column, $order = 'ASC' ) {
		return $this->_model->orderBy( $column, $order );
	}

	function orderByDesc( $column ) {
		return $this->_model->orderByDesc( $column );
	}

	//Only use for User model
	function role( $role ) {
		return $this->_model->role( $role );
	}
}
