<?php

class Suma {
	private $valor1;
	private $valor2;
	private $resultado;
	

	

	/**
	 * Get the value of valor1
	 */
	public function getValor1()
	{
		return $this->valor1;
	}

	/**
	 * Set the value of valor1
	 */
	public function setValor1($valor1): self
	{
		$this->valor1 = $valor1;

		return $this;
	}

	/**
	 * Get the value of valor2
	 */
	public function getValor2()
	{
		return $this->valor2;
	}

	/**
	 * Set the value of valor2
	 */
	public function setValor2($valor2): self
	{
		$this->valor2 = $valor2;

		return $this;
	}

	/**
	 * Get the value of resultado
	 */
	public function getResultado()
	{
		return $this->resultado;
	}

	/**
	 * Set the value of resultado
	 */
	public function setResultado($resultado): self
	{
		$this->resultado = $resultado;

		return $this;
	}

	//Crear función Suma
	
	function funcionBoton1($cargar1)
	{
	$cargar1->setResultado($_POST['numero1']+$_POST['numero2']);
	echo $_POST['numero1'].' + '.$_POST['numero2'].' = '.$cargar1->getResultado().'<br>';
	}

}
?>