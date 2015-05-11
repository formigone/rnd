describe('Person class', function(){
   it('should have a name', function(){
      var me = new Person('rodrigo', 'silveira');
      expect(me.getName()).toBe('rodrigo silveira');
   });
});

