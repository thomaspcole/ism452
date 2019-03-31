let inv = function(p){
  p.setup = function(){
    p.createCanvas(275,230);
  }

  p.draw = function(){
    p.background(200);
    p.invGraph = new barGraph(p, ['Flour', 'Milk', 'Eggs'], [10,96,50], 160, true, true);
    p.invGraph.display();
    p.noLoop();
  }
}

let shipping = function(p){
  p.setup = function(){
    p.createCanvas(275,230);
  }

  p.draw = function(){
    p.background(200);
    p.shipGraph = new barGraph(p, ['Ready to Ship', 'In Trasnit', 'Delivered'], [30,10,60], 160, false, false);
    p.shipGraph.display();
    p.noLoop();
  }
}

let orderQueue = function(p){
  p.setup = function(){
    p.createCanvas(275,230);
  }

  p.draw = function(){
    p.background(200);
    p.shipGraph = new numberDisplay(p, 'Open Orders', 20, false, false);
    p.shipGraph.display();
    p.noLoop();
  }
}

new p5(inv, 'inventoryOnHandCanvas');
new p5(shipping, 'finishedInventory');
new p5(orderQueue, 'orderQueue');
