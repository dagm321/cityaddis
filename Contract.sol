pragma solidity ^0.8.0;

contract abcd {

    struct person {
        string name;
        uint age;
    }

    person[] madabra;

    function reuse(string memory _name, uint _age) public {
             madabra.push(person(_name, _age));
    }

   
    function try() public returns (uint) {
        uint x = 5;
        uint y = 10;
        uint result = x + y;
        return result;
    }

  mapping (uint => string) nameofmap;

  contstructor () public {
        nameofmap[1] = "abebe";
        nameofman[2] = "kebede";
  }

    mapping(uint => home) storehome;
  
  struct home {
       string bed;
       string chair;
  }

  function newfun(uint _price, string memory _bale1, string memory _bale3) public {
     storehome[_price] = home(_bale1, _bale3);
  }
}