<?php

namespace Application\Model;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilteInterface;
use Core\Model\Entity;

/**
 * Entidade Comment
 *
 * @category Application
 * @package Model	
 */
class Comment extends Entity
{
	/**
	 * Nome da tabela. Campo obrigatorio
	 * @var string  
	 */
	protected $tableName = 'comments';

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var int
	 */
	protected $post_id;

	/**
	 * @var script
	 */
	protected $description;

	/**
	 * @var string 
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @var string
	 */
	protected $webpage;

	/**
	 * @var datetime
	 */
	protected $comment_date;

	/**
	 * Configura os filtros dos campos da entidade
	 *
	 * @return Zend\InputFilter\InputFilter
	 */
	public function getInputFilter()
	{
		if (!$this->inputFilter) {
			$inputFilter = new InputFilter();
			$factory 	 = new InputFactory();

			$inputFilter->add($factory->createInput(array(
				'name' => 'id',
				'required' => true,
				'filters' => array(
					array('name' => 'Int')
				),
			)));
		}
	}
}