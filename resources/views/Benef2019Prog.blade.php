@extends('chart')

@section('content_top')
{{-- CSV ainda não funcionando
<a href="/Benef2019ProgCsv"><i class="fas fa-file-csv"></i></a> Download
 --}}
@endsection

@section('content_footer')

<center>
    <p>Quantidade de benefícios concedidos em 2019 na Faculdade de Filosofia, Letras e Ciências Humanas separados por programa.</p>
    <p>obs.: A consulta considera o número de benefícios concedidos, e não o número de alunos beneficiados.</p>
</center>

<b>Legenda: </b>
<ul style="list-style-type: none;">
    <li>19 - Bolsa Monitoria</li>
    <li>22 - Programa de Formação de Professores</li>
    <li>69 - Apoio PAE - Programa de Aperfeiçoamento de Ensino</li>
    <li>89 - Bolsa Programa Santander Universidades</li>
    <li>97 - Emergencial - Auxilio Alimentação</li>
    <li>99 - Auxilio Financeiro</li>
    <li>100 - Cátedra Olavo Setúbal de Arte, Cultura e Ciência do IEA</li>
    <li>103 - SEI - Auxilio Alimentação</li>
    <li>104 - Bolsa InovaGrad</li>
</ul>

@endsection