@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <panel title="Dashboard">
                Conteúdo

                <div class="row">
                    <div class="col-md-4">
                        <panel title="Conteúdo 1">
                            Conteúdo do painel 1.
                        </panel>
                    </div>
                    <div class="col-md-4">
                        <panel title="Conteúdo 2">
                            Conteúdo do painel 2.
                        </panel>
                    </div>
                    <div class="col-md-4">
                        <panel title="Conteúdo 3">
                            Conteúdo do painel 3.
                        </panel>
                    </div>
                </div>
            </panel>
        </div>
    </div>
</div>
@endsection