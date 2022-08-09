<?php

namespace App\Http\Controllers;

use App\MyContants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class ProdutoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.product.index');
    }


    public function searchProduto($id)
    {
        $base_url = '';
        switch ($id) {
            case 'digital':
                $base_url = MyContants::BASE_URL_FIBRA . '/' . $id;
                break;
            case 'novaFibra':
                $base_url = MyContants::BASE_URL_FIBRA . '/' . $id;
                break;
            case 'mobilidade':
                $base_url = MyContants::BASE_URL_FIBRA . '/' . $id;
                break;
        }

        // return view('app.product.index');
    }

    public function home()
    {
        // $allPost = Http::get('https://jsonplaceholder.typicode.com/posts')->json();


        $lista =  Config::get("constantes");

        foreach ($lista as $idx => &$produto) {
            foreach ($produto as $kProdu => &$itemProduto) {
                $itemProduto['arr_alertas'] = [];
                $itemProduto['class_servico'] = [];

                foreach ($itemProduto['servicos'] as $kItem => &$item) {

                    array_push($itemProduto['arr_alertas'], $item['tipo_incidente']);

                    $item['clase_incidente'] = $this->verificaIncidente($item['tipo_incidente']);
                }

                $itemProduto['class_servico'] = $this->verificaArrayAlerta($itemProduto['arr_alertas']);
            }
        }
        $listProdutos = $lista['produtos'];


        return view('home', compact('listProdutos'));
    }


    protected function verificaArrayAlerta($arr)
    {
        if (in_array('Alerta crítico', $arr)) {
            $msg = 'danger';
        } elseif (in_array('Alerta médio', $arr)) {
            $msg = 'warning';
        } else {
            $msg = 'success';
        }

        return $msg;
    }

    protected function verificaIncidente(string $tipoIncidente)
    {
        $class_incidente = '';
        switch ($tipoIncidente) {
            case 'Alerta médio':
                $class_incidente = 'warning';
                break;
            case 'Alerta crítico':
                $class_incidente = 'danger';
                break;
            default:
                $class_incidente = 'success';
                break;
        }

        return $class_incidente;
    }
}
