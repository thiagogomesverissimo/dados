<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\GenericChart;
use Uspdev\Cache\Cache;

class AtivosPorCursoGradController extends Controller
{
    private $data;
    public function __construct(){
        $cache = new Cache();
        $data = [];

        /* Contabiliza aluno graduação - Ciências Sociais */
        $query = file_get_contents(__DIR__ . '/../../../Queries/conta_alunogr_sociais.sql');
        $result = $cache->getCached('\Uspdev\Replicado\DB::fetch',$query);
        $data['Ciências Sociais'] = $result['computed'];

        /* Contabiliza aluno graduação - Filosofia */
        $query = file_get_contents(__DIR__ . '/../../../Queries/conta_alunogr_filosofia.sql');
        $result = $cache->getCached('\Uspdev\Replicado\DB::fetch',$query);
        $data['Filosofia'] = $result['computed'];

        //* Contabiliza aluno graduação - Geografia */
        $query = file_get_contents(__DIR__ . '/../../../Queries/conta_alunogr_geografia.sql');
        $result =$cache->getCached('\Uspdev\Replicado\DB::fetch',$query);
        $data['Geografia'] = $result['computed']; 

        /* Contabiliza aluno graduação - História */
        $query = file_get_contents(__DIR__ . '/../../../Queries/conta_alunogr_historia.sql');
        $result = $cache->getCached('\Uspdev\Replicado\DB::fetch',$query);
        $data['História'] = $result['computed']; 

        /* Contabiliza aluno graduação - Letras */
        $query = file_get_contents(__DIR__ . '/../../../Queries/conta_alunogr_letras.sql');
        $result = $cache->getCached('\Uspdev\Replicado\DB::fetch',$query);
        $data['Letras'] = $result['computed']; 

        $this->data = $data;
    }    
    
    public function grafico(){
        /* Tipos de gráficos:
         * https://www.highcharts.com/docs/chart-and-series-types/chart-types
         */
        $chart = new GenericChart;

        $chart->labels(array_keys($this->data));
        $chart->dataset('Quantidade', 'bar', array_values($this->data));

        return view('ativosPCGrad', compact('chart'));
    }

    public function csv(){

        $data = collect($this->data);
        $csvExporter = new \Laracsv\Export(); //dd($data);
        $csvExporter->build($data, ['vinculo', 'quantidade'])->download();

    }
}
