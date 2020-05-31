import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { NOTFOUND } from 'dns';


const routes: Routes = [
 {path:'' , redirectTo:'home' ,pathMatch:'full'},
 {path:'home' , component:HomeComponent},
 {path:'about' , component:AboutComponent},
 {path:'gallery' , component:GallaryComponent},
 {path:'contacts' , component:contectComponent},
 {path:'**' , component:Notfoundcomponent},
 
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
