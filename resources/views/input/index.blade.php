<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Nama Produk:</label>
    <input type="text" name="name" required>

    <label for="description">Deskripsi Produk:</label>
    <textarea name="description" required></textarea>

    <label for="price">Harga Produk:</label>
    <input type="number" name="price" step="0.01" required>

    <label for="image">Gambar Produk:</label>
    <input type="file" name="image" required>

    <button type="submit">Tambah Produk</button>
</form>
