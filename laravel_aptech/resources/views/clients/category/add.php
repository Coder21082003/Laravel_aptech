<h1>Them chuyen muc</h1>


<form method="POST" action="<?php echo route('category.add');?>">
    <div>
        <input type="text" name="category_name" placeholder="Ten chuyen muc">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit">Them chuyen muc</button>
</form> 