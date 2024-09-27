   // Списать баланс
 function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance = number_format($this->balance - $amount, 8, '.', ' ');
        } else {
            throw new Exception("Недостаточно средств");
        }
    }
  
  // Зачислить  
    function deposit($amount) {
        if ($amount > 0) {
            $this->balance = number_format($this->balance + $amount, 8, '.', ' ');
        } else {
            throw new Exception("Сумма должна быть положительной");
        }
    }
