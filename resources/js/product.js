import axios from "axios"

window.onload = () => {
    const productStockId = 'product_stock_'
    const products_items = $(`input[id^=${ productStockId }]`)


    products_items.on('change', function(e){
        const product_id = e.target.name.toString().replace(productStockId, '')
        const newStock = e.target.value
        
        axios.put( `/products/${ product_id }`, {stock: newStock} ).then( function( resp ){
        }).catch( resp => {
            console.log(resp)
        })
    })

    window.Echo.channel('product-channel').listen('.StockUpdated', function(data){
        const { product } = data
        const { id, stock } = product

        $(`input[id=${ productStockId + id }]`).val( stock )
    });
}