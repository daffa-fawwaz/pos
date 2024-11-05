<?php

require_once __DIR__ . '/Model.php';


class Item extends Model
{
    protected $table = 'items';

    public function create($data)
    {

        $nama_file = $data["files"]["attachment"]["name"];
        $tmp_name = $data["files"]["attachment"]["tmp_name"];
        $ekstensi_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $ekstensi_allowed = ["jpg", "png", "heic", "gif", "webp", "raw"];
        if (!in_array($ekstensi_file, $ekstensi_allowed)) {
            return "Ektensi file tidak sesuai";
        }

        if ($data["files"]["attachment"]["size"] > 5000000) {
            return "Ukuran file tidak boleh lebih dari 5MB";
        }

        $nama_file = random_int(1000, 9999) . "." . $ekstensi_file;
        move_uploaded_file($tmp_name, "./../public/img/items/" . $nama_file);
        $data = [
            "name" => $data["post"]["name"],
            "attachment" => $nama_file,
            "price" => $data["post"]["price"],
            "categories_id" => $data["post"]["categories_id"],
        ];
        return parent::create_data($data, $this->table);
    }

    public function all()
    {
        return parent::all_data($this->table);
    }

    public function find($id)
    {
        return parent::find_data($id, $this->table);
    }

    public function update($id, $datas)
    {
        return parent::update_data($id, $datas, $this->table);
    }

    public function delete($id)
    {
        return parent::delete_data($id, $this->table);
    }
    public function search($keyword, $start = null, $limit = null)
    {
        $queryLimit = "";
        if (isset($start) && isset($limit)) {
            $queryLimit = " LIMIT $start, $limit";
        }
        $keyword = " WHERE name LIKE '%{$keyword}%' $queryLimit";
        return parent::search_data($keyword, $this->table);
    }

    // public function join($category_id, $id) {

    // }

    public function paginate($start, $limit)
    {
        return parent::paginate_data($start, $limit, $this->table);
    }
}
