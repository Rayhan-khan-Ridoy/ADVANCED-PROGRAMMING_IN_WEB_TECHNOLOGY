import Contract from './Contract';
import Login from './Login';
import Product from './Product';

const Home=()=>{
return(
  <div>
            <Contract/>
            <h1>This is Home Page</h1>
            <h1>Hello from React app</h1>
            <Login></Login>
            <p>This is a paragraph of react app</p>
            <Product Name="R15" Price="4lakh" Brand="Yamaha"></Product>
            <Product Name="CBR" Price="5lakh" Brand="Honda"></Product>
  </div>
)


}
export default Home;
