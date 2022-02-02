<?php 

	class ContaBancaria
	{
		private $banco;
		private $nomeTitular = 'Gustavo Fraga';
		private $numeroAgencia = '3467';
		private $numeroConta;
		private $saldo = 1000.00;

		public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
		{
		 $this->banco = $banco;
		 $this->nomeTitular = $nomeTitular;
		 $this->numeroAgencia = $numeroAgencia;
		 $this->numeroConta = $numeroConta;
		 $this->saldo = $saldo;
		}

		public function obterSaldo()
		{
			return 'Seu saldo é: R$ ' . $this->saldo;
		}

		public function depositar ($valor)
		{
			$this->saldo += $valor;
			return 'Depósito de R$ ' . $valor . ' realizado!';
		}

		public function sacar ($valor){
			$this->saldo -= $valor;
			return 'Saque de R$ ' . $valor . ' realizado!';;
		}

	}

	$conta = new ContaBancaria(

		'Bando do Brasil', //banco
		'Gustavo Fraga',  //nomeTitular
		'8244',          //numeroAgencia
		'57254-10',     //numeroConta
		0              //saldo

	);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(300.00);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->sacar(150.00);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

 ?>