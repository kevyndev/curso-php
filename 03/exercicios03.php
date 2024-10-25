<?php

//Crie uma classe ContaBancaria com métodos para realizar operações bancárias como depositar(), sacar() e consultarSaldo(). Em seguida, crie uma subclasse ContaCorrente que herda da classe ContaBancaria. Adicione um método específico para a subclasse, como cobrarTarifaMensal(), que desconta uma tarifa mensal da conta corrente.Além disso, no método sacar() da ContaCorrente, cobre uma taxa de saque também. Armazene essa taxa como uma constante da classe.

class ContaBancaria {
    private int $saldo;

    public function sacar(int $valorASacar): void {
        if ($valorASacar > 0 && $this->saldo >= $valorASacar) {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(int $valorADepositar): void {
        if ($valorADepositar > 0) {
            $this->saldo += $valorADepositar;
        }
    }

    public function ConsultarSaldo(): float {
        return $this->saldo;
    }
}

class ContaCorrente extends ContaBancaria {
    // 0.5%
    private const float TAXA_SAQUE = 0.0005;
    // R$ 5,00
    private const float TARIFA_MENSAL = 5_00;

    public function cobrarTarifaMensal(): void {
        $this->saldo -= self::TARIFA_MENSAL;
    }

    #[Override]
    public function sacar(int $valorASacar): void {
        $saqueTotal = $valorASacar + $valorASacar * self::TAXA_SAQUE;

        if ($saqueTotal > 0 && $this->saldo >= $saqueTotal) {
            $this->saldo -= $saqueTotal;
        }
    }
}