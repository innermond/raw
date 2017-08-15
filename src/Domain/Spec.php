<?php namespace App\Domain;

interface Spec {
	public function __invoke(array $input) : array;
}
