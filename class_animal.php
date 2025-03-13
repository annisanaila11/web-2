<?php
class Animal {
    public $animals;

    public function __construct($ar_animal)
    {
        $this->animals = $ar_animal;
    }

    public function index()
    {
        foreach ($this->animals as $animal){
            echo "- $animal <br/>";
        }
    }

    public function store($animal)
    {
        $this->animals[] = $animal;
    }

    public function update($index, $animal)
    {
        $this->animals[$index] = $animal;
    }

    public function destroy($index)
    {
        unset($this->animals[$index]);
    }
}

#membuat object
#kirimkan data array kedlam construct
$animal = new Animal(["Ayam", "Ikan"]);

echo "Index - menampilkan seluruh hewan <br/>";
$animal->index();
echo "<br/>";

echo "Store - penambahan hewan baru (burung) <br/>";
$animal->store('Burung');
$animal->index();
echo "<br/>";

echo "Update - Mengupdate hewan <br/>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br/>";

echo "Destroy - menghapus hewan <br/>";
$animal->destroy(1);
$animal->index();
echo "<br/>";
