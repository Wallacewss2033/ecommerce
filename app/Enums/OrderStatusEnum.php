<?php 

namespace App\Enums;

enum OrderStatusEnum: int {

    case CART = 1;
    case PENDING = 2;
    case PAID = 3;
    case CANCELED = 4;
    case REJECTED = 5;

    public function getName(): string 
    {
        return match ($this) 
        {
            self::CART => 'Criado',
            self::PENDING => 'Pendente',
            self::PAID => 'Pago',
            self::CANCELED => 'Cancelado',
            self::REJECTED => 'Não aprovado ',
            default => 'Status não encontrado'
        };
    }

    public function getStyle(): string {
        return match ($this) 
        {
            self::CART => 'Criado',
            self::PENDING => 'Pendente',
            self::PAID => 'Pago',
            self::CANCELED => 'Cancelado',
            self::REJECTED => 'Não aprovado ',
            default => 'Status não encontrado'
        };
    }
}