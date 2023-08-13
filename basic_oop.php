abstract class BangunDatar {
    abstract public function area();
    abstract public function circumference();
    abstract public function enlarge($scale);
    abstract public function shrink($scale);
}

class Lingkaran extends BangunDatar {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }

    public function circumference() {
        return 2 * pi() * $this->radius;
    }

    public function enlarge($scale) {
        $this->radius *= $scale;
    }

    public function shrink($scale) {
        $this->radius /= $scale;
    }
}

class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function area() {
        return pow($this->sisi, 2);
    }

    public function circumference() {
        return 4 * $this->sisi;
    }

    public function enlarge($scale) {
        $this->sisi *= $scale;
    }

    public function shrink($scale) {
        $this->sisi /= $scale;
    }
}

class PersegiPanjang extends BangunDatar {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function area() {
        return $this->panjang * $this->lebar;
    }

    public function circumference() {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function enlarge($scale) {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale) {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

class Descriptor {
    public static function describe($bangunDatar) {
        $name = get_class($bangunDatar);
        $luas = $bangunDatar->area();
        $keliling = $bangunDatar->circumference();
        echo "Bangun datar ini adalah {$name} yang memiliki luas {$luas} dan keliling {$keliling}.\n";
    }
}

// Contoh penggunaan
$lingkaran = new Lingkaran(10);
$persegi = new Persegi(10);
$persegiPanjang = new PersegiPanjang(10, 20);

Descriptor::describe($lingkaran);
Descriptor::describe($persegi);
Descriptor::describe($persegiPanjang);
