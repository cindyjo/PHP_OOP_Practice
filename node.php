<?php
ini_set('xdebug.var_display_max_depth', '10');  
class Node
{
	public $value, $prev, $next;
	public function __construct($value)
	{
		$this->value=$value;
	}	

}

class DoublyLinkedList
{
	public $head, $tail;

	public function add_node($head, $value)
	{
		$current = $head;
		while($current->next !== null)
		{
			$current = $current->next;
		}
		$current->next = new Node($value);
		$current->next->prev = $current;
		$this->tail = $current->next;
	}	

	public function delete_node($value)
	{
		$current=$this->head;

		if($current->value === $value)
		{	
			$this->head = $current->next;
			$this->head->prev = null;
			$current->value = null;	
		}
		else
		{
			while($current->next->value !== $value)
			{
				$current= $current->next;
				if($current === null)
				{
					return false;
				}

			}
			if($current->next===$this->tail )
			{
				$this->tail->prev=null;
				$current->next=null;
				$this->tail=null;
				$this->tail=$current;
			}
			else
			{
				$temp= $current->next;
				$current->next=$temp->next;
				$current->next->prev = $current;
				$temp->next = null;
				$temp->prev = null;
				$temp->value = null;
			}
		}
	}
	public function insert_node($position_before, $value)
	{
		$index = 1;
	}
}



$node = new Node(1);
$list = new DoublyLinkedList();
$list->head = $node;
$list->add_node($list->head, 2);
$list->add_node($list->head, 3);
$list->add_node($list->head, 4);
$list->delete_node(3);
var_dump($list)

?>