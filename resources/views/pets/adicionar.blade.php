Adicionar novo pet:

<form action="/pets" method="post">
    @csrf

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" /> <br/>

    <label for="color">Cor</label>
    <input id="color" name="color" type="text" /> <br/>

    <label for="specie">Specie
        
    </label>
    <select name="specie" id="specie">
        <option value="pokemon">Pokémon</option>
        <option value="cachorro">Cachorro</option>
        <option value="gato">Gato</option>
        <option value="cobra">Cobra</option>
        <option value="ave">Ave</option>
        <option value="coelho">Coelho</option>
        <option value="dragao de komodo">Dragão de Komodo</option>
        <option value="camaleao">Camaleão</option>
        <option value="camelo">Camelo</option>
        <option value="cavalo">Cavalo</option>
        <option value="zebra">Zebra</option>
        <option value="outros">Outros</option>
    </select> <br/>

    <label for="size">Size</label>
    <select name="size" id="size">
        <option value="XS">XS</option>
        <option value="SM">SM</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
    </select>

    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/pets">Voltar</a>
