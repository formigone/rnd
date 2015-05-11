describe('Person class', function(){
   it('should have a name', function(){
      var me = new Person('rodrigo', 'silveira');
      expect(me.getName()).toBe('rodrigo silveira');
   });

   it('should have first name only', function(){
      var me = new Person('rodrigo');
      expect(me.firstName.length).toBe(7);
      expect(me.lastName).toBe(undefined);
   });
});

