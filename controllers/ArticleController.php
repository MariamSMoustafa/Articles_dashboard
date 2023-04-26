<?php 



// class ArticleController extends Controller 
// {
//     private $conn;

//     public function __construct()
//     {
//         $this->conn = new Products();
//     }


//     public function index()
//     {
//         $data['products'] = $this->conn->getAllProducts();
//         return $this->view('products/index',$data);
//     }





//     public function add()
//     {
//         return $this->view('products/add');
//     }

//     public function store()
//     {
//         if(isset($_POST['submit']))
//         {
//             $name = $_POST['name'];
//             $description = $_POST['description'];
//             $price = $_POST['price'];
//             $qty = $_POST['qty'];

//             $this->conn = new Products();
//             $dataInsert = Array ( "name" => $name ,
//                             "description" => $description ,
//                             "price" => $price ,
//                             "qty" => $qty 
//                             );

//             if($this->conn->insertProducts($dataInsert))
//             {
//                 $data['success'] = "Data Added Successfully";
//                 return $this->view('products/add',$data);
//             }
//             else 
//             {
//                 $data['error'] = "Error";
//                 return $this->view('products/add',$data);
//             }
//         }
//         return $this->view('products/add');
//     }




//     public function edit($id)
//     {
//         // var_dump($this->conn->getProduct($id));
//         $data['row'] = $this->conn->getProduct($id)[0];
//         return $this->view('products/edit',$data);
//     }

//     public function update()
//     {
//         if(isset($_POST['submit']))
//         {
//             $name = $_POST['name'];
//             $description = $_POST['description'];
//             $price = $_POST['price'];
//             $qty = $_POST['qty'];
//             $id = $_POST['id'];

//             $this->conn = new Products();
//             $dataInsert = Array ( "name" => $name ,
//                             "description" => $description ,
//                             "price" => $price ,
//                             "qty" => $qty 
//                             );
//             // data of product
            

//             if($this->conn->updateProduct($id,$dataInsert))
//             {
//                 $data['success'] = "Updated Successfully";
//                 $data['row'] = $this->conn->getProduct($id)[0];
//                 $this->view('products/edit',$data);
//             }
//             else 
//             {
//                 $data['error'] = "Error";
//                 $data['row'] = $this->conn->getProduct($id)[0];
//                 return $this->view('products/edit',$data);
//             }
//         }
//         redirect('home/index');
//     }



    
//     public function delete($id)
//     {
//         // if($this->conn->deleteProduct($id))
//         // {
//         //     $data['success'] = "Product Have Been Deleted";
//         //     return $this->view('products/delete',$data);
//         // }
//         // else 
//         // {
//         //     $data['error'] = "Error";
//         //     return $this->view('products/delete',$data);
//         // }
//     }
// }