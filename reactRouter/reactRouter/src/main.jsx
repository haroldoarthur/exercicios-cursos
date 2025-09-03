import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.jsx'

//configurando router
import { createBrowserRouter, RouterProvider, Navigate } from "react-router-dom";

import Homepage from './routes/Homepage.jsx';
import Contactpage from './routes/Contactpage.jsx';
import Errorpage from './routes/Errorpage.jsx';
import ContactDetails from './routes/ContactDetails.jsx';

/*
const router = createBrowserRouter([
  {
    path: "/",
    element: <Homepage />
  },
  {
    path: "contato",
    element: <Contactpage />
  },
]);
*/

const router = createBrowserRouter([
  {
    path: "/",
    element: <App />,
    errorElement: <Errorpage />,
    children: [
      {
        path: "contato",
        element: <Contactpage />
      },
      {
        path: "/",
        element: <Homepage />
      },
      //nested routes
      {
      path: "/contact/:id",
      element: <ContactDetails />,
      },

      //paginas nao existentes
      {
        path: "oldcontact",
        element: <Navigate to="/contato" />,
      },
    ]
  },

]);



createRoot(document.getElementById('root')).render(
  <StrictMode>
    <RouterProvider router={router} />
  </StrictMode>,
)
