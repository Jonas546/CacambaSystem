<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbar2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>        

        <a class="navbar-brand" href="{{ url('/') }}">Caçamba System</a>

            <div class="collapse navbar-collapse justify-content-between" id="navbar2">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Caçambas</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('Gerenciar_Cacamba') }}">Gerenciar Caçambas</a>
                            <a class="dropdown-item" href="{{ url('Gerenciar_Cacamba/create') }}">Registrar Caçambas</a>
                        </div> 
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Funcionários</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('Gerenciar_Funcionarios')}}">Gerenciar Funcionários</a>
                            <a class="dropdown-item" href="{{ url('Gerenciar_Funcionarios/create')}}">Registrar Funcionário</a>
                        </div> 
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locações</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('Gerenciar_Locacao/create')}}">Nova Locação</a>
                            <a class="dropdown-item" href="{{url('Gerenciar_Locacao')}}">Gerenciar Locações</a>
                            <a class="dropdown-item" href="{{url('Historico')}}">Histórico</a>
                        </div> 
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Financeiro</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/Financeiro_receitas')}}">Relatório de Receitas</a>
                            <a class="dropdown-item" href="{{url('/Financeiro_despesas')}}">Relatório de Despesas</a>
                            <a class="dropdown-item" href="{{url('Financeiro/create')}}">Registrar Despesas</a>
                        </div> 
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuário</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/register">Novo Usuário</a>
                            <a class="dropdown-item" href="/change">Mudar Senha</a>
                        </div> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Sair</a>
                </li>
            </ul>
            <div id="search"></div>
        </div>    
</nav>  