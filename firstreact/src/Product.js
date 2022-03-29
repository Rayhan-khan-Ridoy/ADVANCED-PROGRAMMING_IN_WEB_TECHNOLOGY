const Product =(props)=>{

    return(
        <div>
            <span>{props.Name}</span>
            <p>{props.Price}</p>
            <p>{props.Brand}</p>
        </div>
    )
}
export default Product;
