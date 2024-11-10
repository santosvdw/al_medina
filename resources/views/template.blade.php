@extends('layouts.app')

@section('content')
<section class="disclaimer">
    <p>*Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus eum quae numquam reprehenderit totam aperiam nam enim, excepturi odit temporibus.*</p>
</section>

<section class="paragraph">
    <h3>Hello world!</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, quas voluptatem. Ut voluptas eos adipisci non libero possimus ducimus odio. Quasi nihil et non, possimus culpa a, vitae harum praesentium porro obcaecati in? Distinctio atque fuga enim consequatur reiciendis alias corrupti provident quidem reprehenderit velit iste eligendi quam dicta, doloremque sequi fugit molestias aliquid saepe quod perspiciatis temporibus ab ratione sunt. Labore eos alias molestias ipsam eum recusandae laudantium aliquid architecto quis a, ab quae voluptatibus sequi odit blanditiis fugiat aliquam, quisquam perferendis dolore perspiciatis, excepturi assumenda cupiditate quidem. Blanditiis soluta est consequatur quasi! Velit ut sit ducimus quisquam architecto.</p>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos earum possimus, debitis cum eum minus eos soluta sunt necessitatibus, suscipit quaerat rem. Veniam, libero ipsum? Similique unde cupiditate a cumque molestiae aliquam ea porro quaerat voluptas saepe et temporibus mollitia consectetur voluptate id laudantium delectus, odio sequi fugiat labore culpa vitae quasi deleniti ipsam. Praesentium fugit a atque animi eius est dolorum necessitatibus inventore eaque nam fuga pariatur ipsa, laboriosam sequi aspernatur magni porro nobis nihil suscipit rem vitae cumque. Maiores facilis sint enim veniam autem vitae ex possimus cum esse, excepturi, nobis, tempora beatae? Est consequatur officiis quibusdam repellendus harum. Nesciunt modi error numquam hic officiis? Quod ipsam rem dolorum quo ipsa architecto corporis est dicta impedit. Amet, sit?</p>
    <br>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis obcaecati nam fugiat laudantium fugit. Quia dicta voluptates voluptatem repellendus aspernatur.</p>
</section>

<section class="table">
    <h3>Tabel</h3>
    <table border-collapse="collapse">
        <thead colspan="4"><h4>Hijama</h4></thead>
        <tbody>
            <tr>
                <td>Row 1, Cell 1</td>
                <td>Row 1, Cell 2</td>
                <td>Row 1, Cell 3</td>
                <td class="emphasize">Row 1, Cell 4</td>
            </tr>
            <tr>
                <td>Row 2, Cell 1</td>
                <td>Row 2, Cell 2</td>
                <td>Row 2, Cell 3</td>
                <td class="emphasize">Row 2, Cell 4</td>
            </tr>
            <tr>
                <td>Row 3, Cell 1</td>
                <td>Row 3, Cell 2</td>
                <td>Row 3, Cell 3</td>
                <td class="emphasize">Row 3, Cell 4</td>
            </tr>
            <tr>
                <td colspan="3">Row 4, Cell 1</td>
                <td class="emphasize">Row 4, Cell 4</td>
            </tr>
        </tbody>
    </table>

</section>

<section class="form">
    <h3>Formulier</h3>
    <form action="/">
    <span class="naam">
        <label for="naam"><h6>Naam:</h6></label>
        <input type="text" name="naam" id="naam" placeholder="Voer hier uw naam in" required>
    </span>

    <span class="behandeling">
        <h6>Waar gaat uw vraag over?</h6>
        <span id="behandeling-cupping">
            <input type="checkbox" name="behandeling" id="cupping" value="cupping">
            <label for="cupping">Cupping</label>
        </span>
        <span id="behandeling-hijama">
            <input type="checkbox" name="behandeling" id="hijama" value="hijama">
            <label for="hijama">Hijama</label>
        </span>
        <span id="behandeling-massage">
            <input type="checkbox" name="behandeling" id="massage" value="massage">
            <label for="massage">Massage</label>
        </span>
        <span id="behandeling-overige">
            <input type="checkbox" name="behandeling" id="overige" value="overige">
            <label for="overige">Overige</label>
        </span>
    </span>

    <span class="vraag">
        <label for="vraag"><h6>Wat is uw vraag?</h6></label>
        <textarea name="vraag" id="vraag" placeholder="Voer hier uw vraag in" required></textarea>
    </span>

    <span class="button">
        <button onclick="" class="italic small-button black"><i class="bi bi-whatsapp"></i> Bericht versturen via whatsapp</button>
    </span>

    </form>
</section>
@endsection