describe('My First Test', function() {
    it('Visits the form', function() {
      cy.visit('http://localhost:8000/')
    })
  
  it('Submit values', function() {
    cy.get('#name').type('Teste')
    cy.get('#email').type('example@example.com')
    cy.get('#ddd').type('31')
    cy.get('#number').type('000000000')
    cy.get('#feedback').type('abcdefghijklmnopqrstuvwxyz')
    cy.get('[type="radio"]').check('reasonable')
    cy.get('form').submit()

  })
})