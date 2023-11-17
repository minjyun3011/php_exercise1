<?php

// require_once __DIR__ . '/car.php';
// class taxi extends car
// {
//     private $passenger;

//     public function __construct($name, $number, $color)
//     {
//         parent::__construct($name, $number, $color);
//     }

//     public function pickup($passenger)
//     {
//         $this->passenger = $passenger;
//         return "{$this->passenger}人乗車しました" . PHP_EOL;
//         $this->passenger += $passenger;
//     }

//     public function lower($passenger)
//     {
//         if ($this->passenger - $passenger >= 0) {
//             return "{$this->passenger}人降車しました" . PHP_EOL;
//             $this->passenger -= $passenger;
//         } else {
//             return "{$this->passenger}人は降車できません" . PHP_EOL;
//         }
//     } -->

//     public function total()
//     {
//         return $this->passenger;
//     }
//     public function information()
//     {
//         return
//             "車の車種: {$this->name}" . PHP_EOL .
//             "車体番号: {$this->number}" . PHP_EOL .
//             "カラー:{$this->color}" . PHP_EOL .
//             "乗車人数:{$this->total()}人" . PHP_EOL;
//     }
// }

require_once __DIR__ . '/car.php';

class taxi extends car
{
    private $passenger;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
        $this->passenger = 0; // 乗車人数の初期化
    }

    public function pickup($passenger)
    {
        if ($passenger + $this->passenger <= 4) {
            $this->passenger += $passenger;
            return "{$passenger}人乗車しました" . PHP_EOL;

            // if ($passenger + $this->passenger == 4) {
            //     return "定員に達しました" . PHP_EOL;
            // } else {
            //     return "残り{strval(4 - $this->passenger)}人乗車可能です" . PHP_EOL;
            // }
        } else {
            return "{$passenger}人は乗車できません" . PHP_EOL;
        }
    }


    public function lower($passenger)
    {
        if ($this->passenger - $passenger >= 0) {
            $this->passenger -= $passenger;
            return "{$passenger}人降車しました" . PHP_EOL;
        } else {
            return "{$passenger}人は降車できません" . PHP_EOL;
        }
    }

    public function total()
    {
        return $this->passenger;
    }

    public function information()
    {
        $message = "車の車種: {$this->name}\n" .
            "車体番号: {$this->number}\n" .
            "カラー: {$this->color}\n" .
            "乗車人数: {$this->total()}人\n";

        if ($this->total() < 4) {
            $message .= "残り" . (4 - $this->total()) . "人乗車可能です\n";
        } else {
            $message .= "定員に達しました\n";
        }

        return $message;
    }
}
