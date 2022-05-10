<div class="box-content h-auto p-4 border-4" id={{ 'product_'.$product->id }}>
    <div>
        <img src="{{ $product->image_url }}" alt="">
    </div>
    <div>
        <input 
            type="number" 
            name={{ 'product_stock_'.$product->id }}
            id={{ 'product_stock_'.$product->id }}
            class="form-input w-16 rounded-xl"
            value={{ $product->stock }}
        />
        
    </div>
</div>