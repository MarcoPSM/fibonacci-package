<?php

namespace FibonacciPackage;

class Fibonacci {
	
    private array $memo = array();
    
    public function fibonacciMemo($n): int {
        if(array_key_exists($n, $this->memo)) {
            return $this->memo[$n];
        }
        else {
            if($n > 1) {
                $result = $this->fibonacciMemo($n-1) + $this->fibonacciMemo($n-2);
                $this->memo[$n] = $result;
                return $result;
            }
            return $n;
        }
    }
}
