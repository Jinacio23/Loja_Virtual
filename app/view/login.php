<style>
    .login{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #ccc;
    }

    h1{
        margin-top: 20px;
    }
    .card{
        border: 2px solid blue;
        text-align: center;
        border-radius: 25px;
    }

    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
        padding: 20px;
    }

    label{
        align-self: flex-start;
        margin-top: 10px;
    }
    input{
        width:100%;
        padding: 5px;
        border-radius: 10px;
        outline: none;
    }

    .btn{
        padding: 5px 10px;
        font-weight: 600;
    }

</style>

<div class="login">
    <div class="card">
        <h1>login</h1>
        <form action="#" method="">
        
            <label for="email">Email</label>
            <input type="email" name="email" id="email"placeholder="Digite seu email">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            <p>Não possui cadastro? <a href="cadastro">Cadastre-se</a></p>
            <button class="btn">Entrar</button>
        
        </form>
    </div>
</div>
